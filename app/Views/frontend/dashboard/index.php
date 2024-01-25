<?php $request = \Config\Services::request();

        $uri = $request->uri;

        $id = $uri->getSegments();

        $query = $uri->getQuery();



        



        if(trim($_SESSION['role'])=='tender_creater' || trim($_SESSION['role'])=='admin'){

?>

                    <div class="bg-sh">

                        <div class="row">

                            <div class="col-sm-12">

                                <h3 class="page-title mb-4">

                                    Modules List

                                </h3>

                            </div>

                            <div class="col-md-3 mb-4">

                                <div class="card card-img-holder bg-gradient-danger">

                                    <div class="card-body">

                                        <img src="<?php echo base_url();?>/assets/public/dashboard/images/jicon-1.jpg" class="img-fluid">

                                        <h2>Tender Creation</h2>

                                        <p class="mb-0">It is all about tender data.</p>

                                    </div>

                                        <a href="<?php echo base_url();?>/admin/tender_data/" class="completed">Create Tender</a>
                                </div>
                            </div>

                            <div class="col-md-3 mb-4">

                                <div class="card card-img-holder bg-gradient-danger">

                                    <div class="card-body">

                                        <img src="<?php echo base_url();?>/assets/public/dashboard/images/jicon-1.jpg" class="img-fluid">

                                        <h2>Tender Creation</h2>

                                        <p class="mb-0">It is all about tender data.</p>

                                    </div>

                                        <a href="<?php echo base_url();?>/admin/tender_data/" class="completed">Create Tender</a>
                                </div>
                            </div>



                        </div>

                    </div>

<?php } else{?>

<div class="bg-sh">

                        <div class="row">

                            <div class="col-sm-12">

                                <h3 class="page-title mb-4">

                                    Modules List

                                </h3>

                            </div>

                            <div class="col-md-3 mb-4">

                                <div class="card card-img-holder bg-gradient-danger">

                                    <div class="card-body">

                                        <img src="<?php echo base_url();?>/assets/public/dashboard/images/jicon-1.jpg" class="img-fluid">

                                        <h2>Tender Creation</h2>

                                        <p class="mb-0">It is all about tender data.</p>

                                    </div>

                                        <a href="<?php echo base_url();?>/admin/tender_show/" class="completed">View Tender</a>

                                    </div>

                            </div>

                        </div>

                    </div>

<?php } ?>    

