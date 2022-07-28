<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Media</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-234009600-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-234009600-1');
</script>



</head>
<body>
    <header id ="heading">
        
        <nav class = "navigation">
             <img src ="uffinal.gif" alt = "logo">
            <a href="index.html">Homepage</a>
            <a href="about.html">Rules</a>
            <a href="index.php">Upload</a>
            <a href="view.php">View Media</a>
            <a href="creator.html"> Creator</a>
        </nav>

        





    </header>

    <article>
        <div class="wrapper">
            <section>
                <div class="static-txt">Upload media</div>
                <p>
                
                
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file"name="file">
                    <button type="submit"name="submit">UPLOAD</button>
                    </form>
                

                </p>

</section>
            
            </section>
            
          </div>
          
        </article>
        
        <article class="container-flex">
            Upload PNG and JPG images only.
            
    
        </article>






