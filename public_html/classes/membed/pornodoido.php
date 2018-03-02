<?php
class MEmbed_pornodoido
{
	public $url;
	public $user_id;
	public $category;
	public $status;
	public $video;
	public $errors	= array();
	public $debug_e = array();
	public $debug_w = array();
	public $message;
	private $overflow = 500;
	public $video_already	= 0;
	public $video_added	= 0;
	public $debug;
	
	public function __construct($url, $user_id, $category, $status, $debug) {
		$this->url		= $url;
		$this->user_id	= $user_id;
		$this->category	= $category;
		$this->status	= $status;
		$this->debug	= false;
	}
	
	public function get_videos() {
		$count  = 0;
		$curl	= new VCurl();
        $html   = clean_html($curl->saveToString($this->url));		
		if ($html) {
			if (preg_match_all('/class="box-escena">(.*?)<div class="clear">/', $html, $matches)) {
				foreach ($matches[0] as $match) {
					unset($debug_e);
					unset($debug_w);				
                    ++$count;
                    if ($count > $this->overflow) {
                        $this->errors[] = 'Overflow reached (500)! Aborting!';
                        return false;
                    }
					
					$video  = array(
						'user_id'	  => $this->user_id,
						'status'	  => $this->status,						
						'site'        => 'pornodoido',
						'id'		  => '',
						'embeddable'  => true,						
						'url'         => '',
						'title'       => '',
						'description' => '',
						'tags'        => '',
						'category'    => '',
						'thumbs'      => array(),
						'duration'    => 0,
						'embed'       => ''	
                    );
					
					//Video ID
					if (preg_match('/video-id="(.*?)"/', $match, $matches_id)) {
						$video['id'] = trim($matches_id[1]);
					} else {
						if (!$this->debug) continue;
						else $debug_e[] = 'ID';
					}
					
					//URL
					if(preg_match('/<a href="(.*?)"/', $match, $matches_url)) {
						$video['url']   = "https://www.pornodoido.com".trim($matches_url[1]);
					} else {
						$this->errors[]	= 'Failed to get video URL for ID: '.$video['id'].'!';
						if (!$this->debug) continue;
						else $debug_e[] = 'URL';
					}
					
					//Title
					if(preg_match('/video-name="(.*?)"/', $match, $matches_title)) {
						$video['title']	= htmlspecialchars_decode(strip_tags(stripslashes($matches_title[1])), ENT_QUOTES);
					} else {
						$this->errors[]	= 'Failed to get video title for '.$video['url'].'!';
						if (!$this->debug) continue;
						else $debug_e[] = 'TITLE';
					}

					//Duration
					if(preg_match('/duracion">(.*?) min/', $match, $matches_duration)) {
                        $video['duration'] = duration_to_seconds($matches_duration[1]);
                    } else {
						$this->errors[]	= 'Failed to get video duration for '.$video['url'].'!';
						if (!$this->debug) continue;
						else $debug_e[] = 'DURATION';
					}
					
					//Thumbnails
					if (preg_match('/<img src="(.*?)"/', $match, $matches_thumb)) {
                        $thumb_str = $matches_thumb[1];
						$thumb_str = explode('-', $thumb_str);
						for ($i = 0; $i <= 16; $i++) {
							$video['thumbs'][] = ''.$thumb_str[0].'-'.$i.'.jpg';
						}
                    } else {
						$this->errors[]	= 'Failed to get video thumbnails for '.$video['url'].'!';
						if (!$this->debug) continue;
						else $debug_e[] = 'THUMBS';	
					}

					//Get Video Page
					$html_video	= clean_html($curl->saveToString($video['url']));
					
					//Categories
					if (preg_match('/<strong>Categoria:<\/strong>(.*?)<strong>/', $html_video, $matches_category1)) {
						if ( isset($matches_category1['1']) ) {			
							$category_string = $matches_category1['1'];
							preg_match_all('/\'>(.*?)<\/a>/', $category_string, $matches_category);
							if ( isset($matches_category['1']) ) {
								$video['category'] = implode(' ', $matches_category['1']);
							} else {
								$debug_w[] = 'CATEGORY';
							}
						} else {
							$debug_w[] = 'CATEGORY';
						}
					} else {
						$debug_w[] = 'CATEGORY';
					}
					
					//Tags
					if (preg_match_all('/<a href="\/tag\/(.*?)">(.*?)<\/a>/', $html_video, $matches_tags)) {
						$video['tags'] = implode(' ', str_replace(' ','-',$matches_tags[2]));
						$video['tags'] = strtolower($video['tags']);					
					} else {
						$debug_w[] = 'TAGS';
					}

					//Description
					if (preg_match('/description\' content=\'(.*?)\'/', $html_video, $matches_description)) {
						$video['description'] = $matches_description[1];
					}					
					
					//Embed Code					
					if (preg_match('/value=\'<iframe src="(.*?)<\/iframe>/', $html_video, $match_embed)) {			
						$video['embed'] = '<iframe src="'.$match_embed[1].'</iframe>';
						$video['embed'] = str_replace('frameborder="1"','frameborder="0"',$video['embed']);
					}
					if (already_added($video['embed'])) {
						++$this->video_already;
						continue;
					}					

					//Check Embeddable Content
					if (!strpos($html_video, 'Embed:')) {
						$video['embeddable'] = false;
						$debug_w[] = 'EMBEDDABLE';
						if (end($matches[0]) !== $match) continue;
					}	
					
					//Debug Mode
					if ($this->debug) {
						echo "Match Content (". $count ."): <textarea style='width:100%' rows=10>".$match."</textarea><br>";
						if ($debug_e) echo "Errors: " . implode(', ',$debug_e) . "<br>";
						if ($debug_w) echo "Warnings: " . implode(', ',$debug_w) . "<br>";
						echo "<pre>";
						print_r($video);
						echo "</pre>";
						exit;
					}
					
					//Add Video
					if (add_video($video)) {
						++$this->video_added;
					} else {
						$this->errors[] = 'Failed to add '.$video['url'].'!';
					}					
					
				} //Foreach Loop - END
			} else {
				$this->errors[] = 'Failed to find embeddable videos on the specified page!';
			}
		} else {
			$this->errors[] = 'Failed to get html code for specified url!';
		}		
		if (!$this->errors) {
			return true;
		}
		return false;
	}
}
?>