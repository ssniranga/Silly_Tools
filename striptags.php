<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include "_head.php" ?>
    <title>Remove HTML Tags - Remove HTML tags from text!</title>

    <meta name="description" content="Simple tool to remove HTML tags and white spaces from your text. Remove p tags, br tags, ul tags mand many more." />
    <meta name="keywords" content="remove html tags, html tag remover, remove html tags online, strip html, remove Tag, remove white space, remove extra space" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="icon" href="images/icon-clipboard.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="images/icon-clipboard.svg" type="image/x-icon" />

  </head>
  <body>

    <?php include "_nav.php" ?>

    <div class="grid-container">

      <div class="grid-x grid-padding-x grid-padding-y">

          <?php include "_ad.php" ?>
        <div class="large-12 cell text-center">
          <h1 class="text-center">Remove HTML Tags and White Spaces</h1>
          <h3>Simple tool to remove HTML tags and White Spaces from your text</h3>
        </div>
      </div>

      <div class="grid-x grid-padding-x">
        <div class="large-12 medium-12 cell">
          <form>
            <div class="grid-x grid-padding-x">
              <div class="large-12 cell text-converter-container">
                <label class="center">Simply enter your text and submit to remove HTML tags or White Spaces.</label>
                <div class="container-txt">
                  <textarea name="txtConvert" id="txtConvert" placeholder="Type/Paste your text here.." required></textarea>
                  <a href="#" class="btn-copy" data-tooltip title="Copy to Clipboard"><img src="images/icon-clipboard.svg" alt="Copy to Clipboard"></a>

                </div>

                <div class="callout btns-container">
                    <div class="columns"><a href="#" class="button button-large btn-stripTags">Remove HTML Tags</a></div>
                    <div class="columns"><a href="#" class="button button-large btn-trim">Remove White Space</a></div>
                </div>
                <div class="callout counter"><span>Character Count: <span class="c-count">0</span> | Word Count: <span class="w-count">0</span> </span></div>

              </div>
            </div>
          </form>
        </div>

      </div>
    </div>

    <?php include "_footer.php" ?>

  </body>
</html>
