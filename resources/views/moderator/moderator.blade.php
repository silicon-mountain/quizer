<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Moderator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.min.css" rel="stylesheet">
    
    <!-- Custom -->
    <link href="css/custom.css" rel="stylesheet">

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
            
  <a href="index.html" > <div style="height: 30px; position: fixed; right: 30px; margin-top: 12px;">
  
  <span class="fui-home"> </span>
  
  </div>
              </a>
              <a class="navbar-brand" href="moderator.html"> moderator</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
             
               
            </div><!-- /.navbar-collapse -->
          </nav>
          
          <!--- question fetching start---->
          
          
         
      <div style="margin-top:80px; margin-bottom:80px">
      <!---Questions---->
         <a href="quest.html" target="_blank"> <dl class="palette palette-select" style="margin-bottom:50px">
              <dd>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </dd>
              
              <dd style="color: white; position: relative; top: 49px; height: 44px; width: 54px;opacity:1">
              
              	<div style="border: 2px solid rgb(255, 255, 255); padding: 2px 5px 5px; background-color: #5D5D5D; font-size: 20pt; width: 44px; height: 44px; border-radius: 5px; text-align: center;">99</div>
              	
              
              </dd>
              <dd style="float:right;">-to PRESTB</dd>
            </dl>
            
   </a>
         
          
        </div>
       
      
    </div>
   
   <div style="position:fixed; bottom:0px; width:100%; height:50px; background:#fff; z-index:5; padding-right:20px; padding-top:3px">
   
  <a href="#myModal" data-toggle="modal"  class="btn btn-md btn-success" style="float:right"><span class=" fui-plus"></span> Question</a>
   </div> 
   
   
   
    
    <!-- Modal -->
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    
    <form class="form-signin" name="loginForm" method="post" action="#" onsubmit="#">
      <div class="modal-header"> 
     
        <h7 class="modal-title" id="myModalLabel" >To:</h7>
      
     
        <input class="form-control form-inline"  value="" placeholder="Enter name" id="" type="text">
       
      </div>
      <div class="modal-body">
       
        
        <textarea class="form-control" placeholder="Whats your question" > 
        </textarea>
       
        
              </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default pull-left" data-dismiss="modal">CANCEL</button>
        <button type="button" class="btn btn-sm btn-default pull-right" data-dismiss="modal">SEND</button>
      </div>
    </div>
  </div>
</div>
    
    <!-- /.container -->

<script type="text/javascript" src="js/modal.js"></script>


    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/vendor/video.js"></script>
    <script src="js/flat-ui.min.js"></script>
    
    
    
    

  </body>
</html>
