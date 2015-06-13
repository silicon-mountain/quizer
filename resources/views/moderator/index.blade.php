<!DOCTYPE html>
<html lang="en" ng-app="quizer">
  <head>
    <meta charset="utf-8">
    <title>Moderator : Quizer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="{{URL::to('assets')}}/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="{{URL::to('assets')}}/css/flat-ui.min.css" rel="stylesheet">

    <script src="{{URL::to('assets')}}/js/angular.min.js" type="text/javascript"></script>
    <script src="{{URL::to('assets')}}/js/angular-sanitize.min.js" type="text/javascript"></script>
    <script src="{{URL::to('assets')}}/js/lodash.compat.min.js" type="text/javascript"></script>
    <script src="{{URL::to('assets')}}/js/restangular.js" type="text/javascript"></script>

    <script src="{{URL::to('assets')}}/js/custom/helpers.js" type="text/javascript"></script>
    <script src="{{URL::to('assets')}}/js/custom/app.js" type="text/javascript"></script>
    <script src="{{URL::to('assets')}}/js/custom/filters.js" type="text/javascript"></script>
    <script src="{{URL::to('assets')}}/js/custom/services.js" type="text/javascript"></script>
    <script src="{{URL::to('assets')}}/js/custom/controllers.js" type="text/javascript"></script>
    <script src="{{URL::to('assets')}}/js/custom/directives.js" type="text/javascript"></script>

    <link rel="stylesheet" href="{{URL::to('assets')}}/css/app.css">

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

           <a href="{{URL::to('archives')}}"> <div style="height: 30px; position: fixed; right: 20px; margin-top: 12px; width: 30px;">

              <div style="" class="box-sm"></div>
                <div style="" class="box-sm"></div>

                <div style="" class="box-sm"></div>
                <div style="" class="box-sm"></div>
            </div>
              </a>
              <a class="navbar-brand" href="{{URL::to('/')}}">Moderator Quizer</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">


            </div><!-- /.navbar-collapse -->
          </nav>

          <!--- question fetching start -->
      
      <div style="margin-top:100px; margin-bottom:50px;" id="question-list" class="file-list" ng-cloak ng-controller="QuestionListController as questionList">
    <!---Questions---->
          <div id="question-layout-container" class="question-layout-container">

            <div class="question-row" ng-repeat="question in questionList.questions | orderBy:'votes':true | filter:{status:'pending'} " >
              <dl class="palette palette-nephritis" style="margin-bottom:120px">
                <dt style="font-size: 50px;"> <a href="{{URL::to('moderator/answering/')}}/<% question.id %>"><% question.content %></a></dt>

                <dd style="color: white; position: relative; top: 30px; height: 44px; width: 54px;opacity:1">

                  <div style="border: 2px solid rgb(255, 255, 255); padding: 2px 5px 5px; background-color: #709E34; font-size: 20pt; width: 100px; height: 100px; border-radius: 5px; text-align: center; font-size: 70px;"><% question.votes %> </div>
                </dd>
                <dd style="float:right; font-size: 25px; margin-bottom:10px;">Status : <% question.status %> &nbsp;&nbsp;&nbsp; Directed to <% question.to %></dd>
              </dl>

            </div>
          </div>
        </div>

      </div>

    </div>

   <div style="position:fixed; bottom:0px; width:100%; height:50px; background:#fff; z-index:5; padding-right:20px; padding-top:3px">

  <a href="#myModal" data-toggle="modal"  class="btn btn-md btn-success" style="float:right"><span class=" fui-plus"></span> Question</a>
   </div>




    <!-- Modal -->
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
      <div class="modal-content">

        <form class="form-signin" name="loginForm" method="post" action="{{URL::to('question')}}" onsubmit="#">
          <div class="modal-header">
            <h7 class="modal-title" id="myModalLabel" >Ask a question</h7>
          </div>
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{Session::token()}}">
            <div class="form-group">
              <input class="form-control form-inline" placeholder="Reciever's Name" name="to" type="text">
            </div>
            <div class="form-group">
              <input class="form-control form-inline" placeholder="Sender's Name" name="from" type="text">
            </div>
            <div class="form-group">
              <textarea class="form-control" placeholder="Question goes here" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Send Question</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger pull-left" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

    <!-- /.container -->
    <!-- My personal Scripts -->
    <script type="text/javascript" src="{{URL::to('assets')}}/js/modal.js"></script>
    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="{{URL::to('assets')}}/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::to('assets')}}/js/vendor/video.js"></script>
    <script src="{{URL::to('assets')}}/js/flat-ui.min.js"></script>


    





  </body>
</html>
