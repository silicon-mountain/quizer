<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Most Voted Question</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="{{URL::to('assets')}}/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="{{URL::to('assets')}}/css/flat-ui.min.css" rel="stylesheet">
    
    <!-- Custom -->
    <link href="{{URL::to('assets')}}/css/custom.css" rel="stylesheet">

   <!-- <link rel="shortcut icon" href="img/favicon.ico"> -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <style>
  
  .box-sm{
	       background: none repeat scroll 0% 0% #FFF;
    width: 15px;
    float: right;
    border: 2px solid rgb(197, 233, 103);
    border-radius: 3px;
    height: 15px;
}
  
  </style>

  
  <body>
    <div class="container">
    
    
 <nav class="navbar navbar-inverse navbar-fixed-top palette-emerald" role="navigation">
            <div class="navbar-header">
            
  <a href="{{URL::to('moderator')}}" > <div style="height: 30px; position: fixed; right: 30px; margin-top: 12px;">
  
  <span class="fui-arrow-left"> </span> Moderator
  
  </div>
              </a>
              <a class="navbar-brand" href="">Currently being answered</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
             
               
            </div><!-- /.navbar-collapse -->
          </nav>
          
          <!--- question fetching start---->
          
          
         
      <div style="margin-top:80px; margin-bottom:80px">
      <!---Questions---->
          <dl class="palette" style="margin-bottom:50px">
              <dd style="font-size : 50px;">{{$question->content}} </dd>
              
              <dd style="color: white; position: relative; top: 49px; height: 44px; width: 54px;opacity:1">
              
              	<div style="border: 2px solid rgb(255, 255, 255); padding: 2px 5px 5px; background-color: #5D5D5D; font-size: 20pt; width: 100px; height: 100px; border-radius: 5px; text-align: center; font-size : 70px;">{{$question->votes}}</div>
              	
              
              </dd>
              <dd style="float:right; font-size : 25px;">Directed to {{$question->to}}</dd>
            </dl>
            
   
         
          
        </div>
        
        <div style=" bottom:0px; width:100%; height:50px; background:#fff; z-index:5; padding:3px 20px 20px;">
   
        <a href="{{URL::to('moderator/set/pending/'.$question->id)}}" class="btn btn-lg btn-info"> Still Pending</a>
        <a href="{{URL::to('moderator/set/notanswered/'.$question->id)}}" class="btn btn-lg btn-danger"> Not Answered</a>
        <a href="{{URL::to('moderator/set/answered/'.$question->id)}}" class="btn btn-lg btn-success"> Answered</a>


   </div> 
       
      
    </div>
   

   
   
   
  

<script type="text/javascript" src="{{URL::to('assets')}}/js/modal.js"></script>


    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="{{URL::to('assets')}}/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::to('assets')}}/js/vendor/video.js"></script>
    <script src="{{URL::to('assets')}}/js/flat-ui.min.js"></script>
    
    
    
    

  </body>
</html>
