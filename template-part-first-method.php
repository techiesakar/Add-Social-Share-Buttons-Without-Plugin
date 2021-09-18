// Template Part For Social Share Buttons 
// Links open in New Tab

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
        <a target="_blank" href="<?php echo $facebookURL . $postURL; ?>" class="sharebtn facebook-btn">
            <i class="fab fa-facebook"></i>
            <span class="facebook-share-btn-text">Share</span>
        </a>
    </li>
    <li>
        <a target="_blank" href="<?php echo $twitterURL . $postURL . '&text' . '=' . $postTitle; ?>"
            class="sharebtn twitter-btn">
            <i class="fab fa-twitter"></i>
            <span class="twitter-tweet-btn-text">Tweet</span>
        </a>
    </li>
    <li>
        <a target="_blank" href="<?php echo $linkedinURL . $postURL?>" class="sharebtn linkedin-btn">
            <i class="fab fa-linkedin"></i>
        </a>
    </li>
    <li>
        <a target="_blank"
            href="<?php echo $pinterestURL . $postIMG . '&url=' . $postURL . '&description=' . $postTitle; ?>"
            class="sharebtn pinterest-btn">
            <i class="fab fa-pinterest"></i>
        </a>
    </li>
</ul>
