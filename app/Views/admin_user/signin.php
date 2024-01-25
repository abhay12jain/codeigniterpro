 <!DOCTYPE html>

 <html>

 <head>

     <meta charset="utf-8">

     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Pratap Admin Panel</title>

      <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Theme style -->

  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/adminlte.min.css">

 </head>

 <style>

    body{

        width: 100%;

        height: calc(100%);

        position: fixed;

        top:0;

        left: 0;

        background-color: #0d6efd !important;

    }

    main#main{

        width:100%;

        height: calc(100%);

        display: flex;

    }



</style>



<body class="bg-dark">





  <main id="main">

    

        <div class="align-self-center w-100">

        <h4 class="text-white text-center"><b>Pratap Admin Panel</b></h4>

        <div id="login-center" class="bg-dark row justify-content-center">

            <div class="card col-md-4">

                <div class="card-body">

                    

                    <h2>Login in</h2>

                

                <?php if(session()->getFlashdata('msg')):?>

                    <div class="alert alert-warning">

                       <?= session()->getFlashdata('msg') ?>

                    </div>

                <?php endif;?>

                <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">

                    <div class="form-group mb-3">

                        <input autocomplete="off" type="email" name="email_id" placeholder="Email" value="<?= set_value('email_id') ?>" class="form-control" />

                    </div>

                    <!-- <div class="form-group mb-3">

                        <input autocomplete="off" type="text" name="full_name" placeholder="full_name" value="<?//= set_value('full_name') ?>" class="form-control" >

                    </div> -->

                    <div class="form-group mb-3">

                        <input type="password" name="password" placeholder="Password" class="form-control" >

                    </div>

                    

                    <div class="d-grid">

                         <button type="submit" class="btn btn-success">Signin</button>

                    </div>     

                </form>

                </div>

            </div>

        </div>

        </div>

  </main>



  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>





</body>



</html>