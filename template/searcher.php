<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if(isset($this)) {
    $settings = $this->get_settings();

    $blank_option = $settings['blank_option'] === 'yes' ? true : false;
    $enable_vintage = $settings['enable_vintage'] === 'yes' ? true : false;

}

/* Dictionary */
$vintage_title =  __("Vintage (use 'NV' for non-vintage). Leave blank to search all vintages.","search-with-wine-searcher");
$vintage_placeholder = __("Vintage","search-with-wine-searcher");

$wine_title =  __("Search phrase.","search-with-wine-searcher");
$wine_placeholder = __("Type any wine name","search-with-wine-searcher");

?>

<?php if ($blank_option) { ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('searchform');
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                var formUrl = form.action + '?' + new URLSearchParams(new FormData(form));
                window.open(formUrl, '_blank');
            });
        }
    });
</script>
<?php } ?>

<style>
    .search-container {
        max-width: 100%;
        margin: 0 auto;
        background-color: #9B9B9B;
        display: flex;
        align-items: center;
        padding: 1px;
        box-sizing: border-box;
    }

    .search-form {
        flex: 1;
        display: flex;
    }
    .typename-container {
        flex: 1;
    }
    .vintage-container {
        border-left: 1px solid #9B9B9B;
        flex: 0.3;

    }
    .search-input {
        height: 37px;
        border: 0;
        outline: none;
        width: 100%;
        background: #fff;
        position: relative;
        box-sizing: border-box;
    }

    .search-input.typename {
        background-image: url('<?php echo esc_attr(plugins_url('/', __FILE__)); ?>../images/logo_splash.webp');
        background-repeat: no-repeat;
        background-size: 25px 14px;
        background-position: 10px;
        padding-left: 45px;
        padding-right: 10px;
    }

    .search-input.vintage {
        padding: 0 20px;
    }

    .search-button {
        background: #0076D6;
        height: 37px;
        width: 49px;
        padding: 0;
        border: 0;
        border-radius: 0 2px 2px 0;
        cursor: pointer;
        box-sizing: border-box;
    }
</style>

<div class="search-container">
    <form class="search-form" name="searchform" id="searchform" method="GET" action="https://www.wine-searcher.com/find">
        <input type="hidden" name="Xfromsearch" value="Y">


        <div class="typename-container">
            <input class="search-input typename" type="text" maxlength="100" name="Xwinename" id="Xwinename" value="" tabindex="1" title="<?php echo esc_attr($wine_title); ?>" placeholder="<?php echo esc_attr($wine_placeholder); ?>" autocomplete="off" spellcheck="false" dir="auto">
        </div>
        <?php if ($enable_vintage) { ?>
            <div class="vintage-container">
                <input class="search-input vintage" type="text" size="4" maxlength="4" id="Xvintage" name="Xvintage" value="" tabindex="2" title="<?php echo esc_attr($vintage_title); ?>" placeholder="<?php echo esc_attr($vintage_placeholder); ?>">
            </div>
        <?php } ?>

        <button class="search-button" name="searchbutton" tabindex="3" onclick="return search_button_click();">
            <svg width="20px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-373.000000, -2884.000000)" fill="#FFF">
                        <g transform="translate(373.000000, 2884.000000)">
                            <path d="M16.8627451,33.4788235 C12.4709804,33.4987373 8.25058824,31.7707843 5.13333333,28.6764706 C2.01447059,25.5821176 0.255686431,21.3741176 0.243529529,16.9823529 C0.229742863,12.5890196 1.96533333,8.37176471 5.06431373,5.25882353 C8.1632549,2.14607843 12.3729412,0.39372549 16.7662745,0.389019608 C21.1580392,0.382901961 25.3737255,2.12309804 28.4803922,5.22823529 C31.588549,8.33180392 33.334902,12.5443137 33.3333333,16.9376471 C33.3379294,21.312549 31.6054118,25.5113725 28.5188235,28.6133333 C25.4305882,31.7138039 21.2396078,33.4631373 16.8627451,33.4784314 L16.8627451,33.4788235 Z M16.8627451,5.21607843 C13.75,5.19463529 10.7552941,6.414 8.54156863,8.60301961 C6.32784314,10.7920392 5.0765098,13.7716471 5.06270588,16.8841961 C5.04891765,19.9984706 6.27439216,22.9885098 8.46803922,25.1975294 C10.6616863,27.4064706 13.6441176,28.6518824 16.7586275,28.658 C19.8713725,28.6656588 22.8601961,27.4340392 25.0629412,25.2342745 C27.2672941,23.0360392 28.506549,20.0503529 28.506549,16.9378039 C28.5126784,13.8403922 27.2917647,10.8656471 25.1088627,8.66878431 C22.9259608,6.47054902 19.9602353,5.22976471 16.8629804,5.21596078 L16.8627451,5.21607843 Z" id="Fill-1"></path>
                            <polygon points="36.1996078 39.6078431 25.78 29.2509804 29.1929804 25.8349412 39.6082745 36.1918039"></polygon>
                        </g>
                    </g>
                </g>
            </svg>
        </button>
    </form>
</div>
