<?php
defined('_VALID') or die('Restricted Access!');

require $config['BASE_DIR']. '/classes/filter.class.php';
require $config['BASE_DIR']. '/include/adodb/adodb.inc.php';
require $config['BASE_DIR']. '/include/compat/json.php';
require $config['BASE_DIR']. '/classes/pagination.class.php';
require $config['BASE_DIR']. '/include/dbconn.php';

$code    = array();
if ( isset($_POST['video_id']) && isset($_POST['page']) ) {
    $filter         = new VFilter();
    $vid            = $filter->get('video_id', 'INTEGER');
    $page           = $filter->get('page', 'INTEGER');
    $uid            = ( isset($_SESSION['uid']) ) ? intval($_SESSION['uid']) : NULL;
    
    $sql            = "SELECT COUNT(CID) AS total_comments FROM video_comments WHERE VID = " .$vid. " AND status = '1'";
    $rsc            = $conn->execute($sql);
    $total          = $rsc->fields['total_comments'];
    $pagination     = new Pagination(10, $page);
    $limit          = $pagination->getLimit($total);
    $sql            = "SELECT c.CID, c.UID, c.comment, c.addtime, s.username, s.photo, s.gender
                       FROM video_comments AS c, signup AS s
                       WHERE c.VID = " .$vid. " AND c.status = '1' AND c.UID = s.UID 
                       ORDER BY c.addtime DESC LIMIT " .$limit;
    $rs             = $conn->execute($sql);
    $comments       = $rs->getrows();
    $page_link      = $pagination->getPagination('video/' .$vid, 'p_video_comments_' .$vid. '_');
    $page_link_b    = $pagination->getPagination('video/' .$vid, 'pp_video_comments_' .$vid. '_');
    $start_num      = $pagination->getStartItem();
    $end_num        = $pagination->getEndItem();
    
    $code[]         = $lang['global.showing']. ' <span class="text-white">' .$start_num. '</span> '.$lang['global.to'].' <span id="end_num" class="text-white">' .$end_num. '</span> '.$lang['global.of'].' <span id="total_comments" class="text-white">' .$total. '</span> '.$lang['global.comments'].'.';
	$code[]         = '<div id="video_response" class="response" style="display: none;"></div>';
	
    if ( $comments ) {

        $code[]     = '<div id="comments_delimiter" style="display:none;"></div>';
        foreach ( $comments as $comment ) {
            $photo      = ( $comment['photo'] == '' ) ? 'nopic-' .$comment['gender']. '.gif' : $comment['photo'];
            $username   = $comment['username'];
            $code[]     = '<div id="video_comment_' .$vid. '_' .$comment['CID']. '" class="col-xs-12 m-t-15">';
			$code[]		= '<div class="row">';
			$code[]		= '<div class="pull-left">';
			$code[]     = '<a href="' .$config['BASE_URL']. '/user/' .$username. '">';
			$code[]		= '<img src="' .$config['BASE_URL']. '/media/users/' .$photo. '" title="' .$username. '" alt="' .$username. '" class="img-responsive comment-avatar" />';
			$code[]		= '</a>';
			$code[]		= '</div>';
			$code[]     = '<div class="comment">';
			$code[]     = '<div class="comment-info">';
			$code[]		= '<a href="' .$config['BASE_URL']. '/user/' .$username. '">' .$username. '</a>&nbsp;-&nbsp;<span class="font-10">' .time_range($comment['addtime']). '</span>';
			$code[]		= '</div>';
			$code[]		= '<div class="comment-body overflow-hidden">' .nl2br($comment['comment']). '</div>';
            if ( $uid ) {
                $code[]   = '<div class="comment-actions">';
                if ( $comment['UID'] == $uid ) {
                    $code[] = '<a href="#delete_comment" id="delete_comment_video_' .$comment['CID']. '_' .$vid. '">'.$lang['global.delete'].'</a> <span id="delete_response_' .$comment['CID']. '" style="display: none;"></span>';
                }
				if ( $comment['UID'] != $uid ) {
					$code[]  = '<span id="reported_spam_' .$comment['CID']. '_' .$vid. '"><a href="#report_spam" id="report_spam_video_' .$comment['CID']. '_' .$vid. '">'.$lang['global.report_spam'].'</a></span>';
				}
                $code[]  = '</div>';
            }
			$code[]     = '</div>';			
            $code[]     = '<div class="clearfix"></div>';
			$code[]     = '</div>';
			$code[]     = '</div>';
        }
		if ( $page_link ) {
			$code[]     = '<div class="visible-xs center m-b--15">';
			$code[]     = '<ul class="pagination pagination-lg">'. $page_link .'</ul>';
			$code[]     = '</div>';
			$code[]     = '<div class="hidden-xs center m-b--15">';
			$code[]     = '<ul class="pagination">'. $page_link .'</ul>';
			$code[]     = '</div>';
		}

    } else {
        $code[] = '<div class="m-t-15"><span class="text-danger">' .$lang['comments.page_no_comments']. '</span></div>';
    }        
} 

$code   = implode("\n", $code);
echo $code;
die();
?>