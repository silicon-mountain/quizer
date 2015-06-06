<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Quizer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="{{URL::to('assets')}}/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="{{URL::to('assets')}}/css/flat-ui.min.css" rel="stylesheet">

   <!-- <link rel="shortcut icon" href="img/favicon.ico"> -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    
    
 <nav class="navbar navbar-inverse navbar-fixed-top palette-emerald" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" href="#">Quizer</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
             
               
            </div><!-- /.navbar-collapse -->
          </nav>
          
          <!--- question fetching start---->
          
          
         <div style="margin-top: 53px; background:#FFF" class="navbar-fixed-top">
          
          <!--- Most voted question---->
          <dl class="palette palette-nephritis">
              <dt>Answering Question</dt>
              <dd style="float:right;">TO >></dd>
            </dl>
         
      </div>
      <div style="margin-top:220px;">
      <!---Questions -->
      @foreach($questions as $question)
          <dl class="palette palette-nephritis">
              <dt>{{$question->content}}</dt>
              <dd style="float:right;">To >> {{$question->to}}</dd>
            </dl>
      @endforeach
          
        </div>
       
      
    </div>
    
    
    
    <!-- /.container -->


    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="{{URL::to('assets')}}/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::to('assets')}}/js/vendor/video.js"></script>
    <script src="{{URL::to('assets')}}/js/flat-ui.min.js"></script>

  </body>
</html>
