<?php
$spams = array ( 
                "100dollars-seo.com",
                "4webmasters.com",
                "4webmasters.org",
                "62002510.videos-for-your-business.com",
                "7makemoneyonline.com",
                "непереводимая.рф",
                "a-hau.mk",
                "acads.net",
                "adcash.com",
                "adviceforum.info",
                "amanda-porn.ga",
                "anal-acrobats.hol.es",
                "anticrawler.org",
                "backgroundpictures.net",
                "baixar-musicas-gratis.comsavetubevideo.com",
                "best-seo-offer.com",
                "best-seo-solution.com",
                "bestwebsiteawards.com",
                "bestwebsitesawards.com",
                "blackhatworth.com",
                "brakehawk.com",
                "buttons-for-website.com",
                "buttons-for-your-website.com",
                "buy-cheap-online.info",
                "cenoval.ru",
                "cenokos.ru",
                "cityadspix.com",
                "cfsrating.sonicwall.com",
                "cxpromote.com",
                "dailyrank.net",
                "domination.ml",
                "depositfiles-porn.ga",
                "darodar.com",
                "descargar-musicas-gratis.com",
                "e-buyeasy.com",
                "econom.co",
                "edakgfvwql.ru",
                "embedle.com",
                "event-tracking.com",
                "extener.com",
                "extener.org",
                "fbdownloader.com",
                "fbfreegifts.com",
                "feedouble.com",
                "feedouble.net",
                "femmesdenudees.com",
                "forum.topic56032908.darodar.com",
                "floating-share-buttons.com",
                "forum20.smailik.org",
                "forum69.info",
                "free-share-buttons.co",
                "free-share-buttons.com",
                "free-social-buttons.com",
                "free-social-buttons.org",
                "get-free-traffic-now.com",
                "getyourprofit.net",
                "generalporn.org",
                "gobongo.info",
                "googlsucks.com",
                "gratuitbaise.com",
                "guardlink.org",
                "hardcore.anzwers.net",
                "howtostopreferralspam.com",
                "howtostopreferralspam.eu",
                "hulfingtonpost.com",
                "humanorightswatch.org",
                "inbabes.sexushost.com",
                "iminent.com",
                "illagedusexe.com",
                "ilovevitaly.com",
                "ilovevitaly.co",
                "ilovevitaly.ru",
                "iskalko.ru",
                "japfm.com",
                "joinandplay.me",
                "joingames.org",
                "kabbalah-red-bracelets.com",
                "kambasoft.com",
                "luxup.ru",
                "meendo-free-traffic.ga",
                "makemoneyonline.com",
                "masterseek.com",
                "mature.free-websites.com",
                "musicprojectfoundation.com",
                "myprintscreen.com",
                "myftpupload.com",
                "o-o-6-o-o.com",
                "o-o-8-o-o.com",
                "ok.ru",
                "openfrost.com",
                "openfrost.net",
                "openmediasoft.com",
                "plusnetwork.com",
                "pornhub-forum.ga",
                "pornhub-forum.uni.me",
                "pornhubforum.tk",
                "priceg.com",
                "ranksonic.com",
                "ranksonic.info",
                "ranksonic.org",
                "rapidgator-porn.ga",
                "s.click.aliexpress.com",
                "sanjosestartups.com",
                "semalt.com",
                "serw.clicksor.com",
                "savetubevideo.com",
                "screentoolkit.com",
                "Semaltmedia.com",
                "seoexperimenty.ru",
                "sexyteens.hol.es",
                "sharebutton.net",
                "sharebutton.to",
                "shodanhq.com",
                "simple-share-buttons.com",
                "sitevaluation.org",
                "site1.floating-share-buttons.com",
                "site2.floating-share-buttons.com",
                "site3.floating-share-buttons.com",
                "site4.floating-share-buttons.com",
                "site5.floating-share-buttons.com",
                "site6.floating-share-buttons.com",
                "site7.floating-share-buttons.com",
                "site8.floating-share-buttons.com",
                "site9.floating-share-buttons.com",
                "site10.floating-share-buttons.com",
                "slftsdybbg.ru",
                "social-buttons.com",
                "socialseet.ru",
                "smailik.org",
                "softomix.com",
                "softomix.net",
                "softomix.ru",
                "soundfrost.org",
                "srecorder.com",
                "star61.de",
                "superiends.org",
                "success-seo.com",
                "theguardlan.com",
                "traffic-paradise.org",
                "trafficmonetize.org",
                "torture.ml",
                "vapmedia.org",
                "videofrost.com",
                "videos-for-your-business.com",
                "viandpet.com",
                "vodkoved.ru",
                "webmaster-traffic.com",
                "webmonetizer.net",
                "websites-reviews.com",
                "websocial.me",
                "www.event-tracking.com",
                "www.kabbalah-red-bracelets.com",
                "www1.free-social-buttons.com",
                "www2.free-social-buttons.com",
                "www3.free-social-buttons.com",
                "www4.free-social-buttons.com",
                "www5.free-social-buttons.com",
                "www6.free-social-buttons.com",
                "www7.free-social-buttons.com",
                "www8.free-social-buttons.com",
                "www9.free-social-buttons.com",
                "www10.free-social-buttons.com",
                "ykecwqlixx.ru",
                "yougetsignal.com",
                "youporn-forum.ga",
                "youporn-forum.uni.me",
                "youtubedownload.org",
                "zazagames.org",
); 
// array of evil spammers 

if(isset($_SERVER['HTTP_REFERER'])) {
  $ref = $_SERVER["HTTP_REFERER"];   
   }
else
{
    $ref = NULL; 
   //it was not sent, perform your default actions here
}


foreach ($spams as $site) { 
    $pattern = "/$site/i"; 
    if (preg_match ($pattern, $ref)) { 
        header("Location: $ref"); exit(); 
    } 
} 
echo '<!-- Block Referral Spam By WPDeveloper.net -->';
?>
