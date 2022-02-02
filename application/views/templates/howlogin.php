<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        .nav-tabs {
            margin-bottom: 0;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border: none;
        }
        .tab-content {
            border: 1px solid #ddd;
            padding: 15px;
        }
        .modal-title{
            padding-top: 5px;
            padding-bottom: 15px;
        }
        .btn-close{
            border-radius: 5px;
        }
    </style>
    </head>
    <body>
        <div class="container" style="padding-top: 100px; width: 60%;">  
            <div class=" text-center  ">
                <ul class="nav nav-tabs" role="tablist" style="background-color: #e8b04f ;">
                    <div class="text-center border-0">
                        <div class="text-right" style="padding-top: 10px; padding-right: 10px;">
                            <a href="<?php echo base_url('pages/help'); ?>" class="link-custom text-decoration-none">
                            <button type="button" class="btn-close" aria-label="Close">x</button></a>
                        </div>
                        <h3 class="modal-title w-100" >How to Login & Logout </h4>
                    </div>
                    <li class="active"><a href="#tab1" aria-controls="tab1" data-toggle="tab" style="color: black;">Step1</a></li>
                    <li><a href="#tab2" data-toggle="tab" style="color: black;">Step2</a></li>
                    <li><a href="#tab3" data-toggle="tab" style="color: black;">Step3</a></li>
                    <li><a href="#tab4" data-toggle="tab" style="color: black;">Step4</a></li>
                    <li><a href="#tab5" data-toggle="tab" style="color: black;">Step5</a></li>
                    <li><a href="#tab6" data-toggle="tab" style="color: black;">Step6</a></li>
                </ul>
                <div class="tab-content text-center" style="padding-top: 10px">
                    <div class="tab-pane active" id="tab1">
                        <div class="card">  
                            <img src="" class="card-img-top" alt="..." style="padding-bottom:10px; width: 40%;">
                            <div class="card-body">
                                <p class="card-text">1.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <a class="btn btnNext" style="background-color: #e8b04f; color: snow;">Next</a>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="card">
                            <img src="" class="card-img-top" alt="..." style="padding-bottom:10px; width: 40%;">
                            <div class="card-body">
                                <p class="card-text">2.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <a class="btn btnPrevious" style="background-color: #e8b04f; color: snow;">Previous</a>
                            <a class="btn btnNext" style="background-color: #e8b04f; color: snow;">Next</a>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <div class="card">
                            <img src="" class="card-img-top" alt="..." style="padding-bottom:10px; width: 40%;">
                            <div class="card-body">
                                <p class="card-text">3.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <a class="btn btnPrevious" style="background-color: #e8b04f; color: snow;">Previous</a>
                            <a class="btn btnNext" style="background-color: #e8b04f; color: snow;">Next</a>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab4">
                        <div class="card">
                            <img src="" class="card-img-top" alt="..." style="padding-bottom:10px; width: 40%;">
                            <div class="card-body">
                                <p class="card-text">4.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <a class="btn btnPrevious" style="background-color: #e8b04f; color: snow;">Previous</a>
                            <a class="btn btnNext" style="background-color: #e8b04f; color: snow;">Next</a>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab5">
                        <div class="card">
                            <img src="" class="card-img-top" alt="..." style="padding-bottom:10px; width: 40%;">
                            <div class="card-body">
                                <p class="card-text">5.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <a class="btn btnPrevious" style="background-color: #e8b04f; color: snow;">Previous</a>
                            <a class="btn btnNext" style="background-color: #e8b04f; color: snow;">Next</a>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab6">
                        <div class="card">
                            <img src="" class="card-img-top" alt="..." style="padding-bottom:10px; width: 40%;">
                            <div class="card-body">
                                <p class="card-text">6.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <a class="btn btnPrevious" style="background-color: #e8b04f; color: snow;">Previous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('.btnNext').click(function(){
            $('.nav-tabs > .active').next('li').find('a').trigger('click');
            });
    
            $('.btnPrevious').click(function(){
            $('.nav-tabs > .active').prev('li').find('a').trigger('click');
            });
        </script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>