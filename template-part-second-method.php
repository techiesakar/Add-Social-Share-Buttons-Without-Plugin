// Template Part For Social Share Buttons 
// Pop-Up method

<?php 
$postURL = urlencode(get_the_permalink());
$postTitle = get_the_title();
$postIMG = urlencode(get_the_post_thumbnail_url());
$facebookURL = 'https://www.facebook.com/sharer.php?u=';
$twitterURL = 'https://twitter.com/share?url=';
$linkedinURL = "https://www.linkedin.com/sharing/share-offsite/?url=";
$pinterestURL = "https://pinterest.com/pin/create/bookmarklet/?media=";
?>
<ul class="social-share-container">
    <li>
        <a target="popup" href="<?php echo $facebookURL . $postURL; ?>" class="sharebtn facebook-btn"
            onclick="window.open('<?php echo $facebookURL . $postURL; ?>','popup','width=600,height=600'); return false;">
            <i class="fab fa-facebook"></i>
        </a>
    </li>
    <li>
        <a target="popup" href="<?php echo $twitterURL . $postURL . '&text' . '=' . $postTitle; ?>"
            class="sharebtn twitter-btn"
            onclick="window.open('<?php echo $twitterURL . $postURL . '&text' . '=' . $postTitle; ?>','popup','width=600,height=600'); return false;">
            <i class="fab fa-twitter"></i>
        </a>
    </li>
    <li>
        <a target="popup" href="<?php echo $linkedinURL . $postURL?>" class="sharebtn linkedin-btn"
            onclick="window.open('<?php echo $linkedinURL . $postURL?>','popup','width=600,height=600'); return false;">
            <i class="fab fa-linkedin"></i>
        </a>
    </li>
    <li>
        <a target="popup"
            href="<?php echo $pinterestURL . $postIMG . '&url=' . $postURL . '&description=' . $postTitle; ?>"
            class="sharebtn pinterest-btn"
            onclick="window.open('<?php echo $pinterestURL . $postIMG . '&url=' . $postURL . '&description=' . $postTitle; ?>','popup','width=600,height=600'); return false;">
            <i class="fab fa-pinterest"></i>
        </a>
    </li>
</ul>
