<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet">
    <title>Todo</title>
  </head>
  <body>
    <div class="container container-fluid-sm bg-light shadow ">
        <div class=" text-center mt-4 py-2  m-auto rounded">
            <h1 class="display-5">Todo-list</h1>
        </div>
        <?= session('user') ?>
        <div class="container-fluid bg-light">
            <div class="container ">
                <form action="#" class="d-flex p-1 col-12">
                    <input type="text" class="col-9 px-4" name="input_list" id="" placeholder="Add Task"  id="datetimepicker1">
                    <div class="mx-auto  d-flex col-3 justify-content-center">
                            <button class="btn btn-success col-5 mx-2"><i class="far fa-calendar-alt fa-2x"></i></button>
                            <button class="btn btn-primary col-5 mx-2">Add</button>
                    </div>
                </form>
            </div>
            <div class="container ">
                <div class="pt-3">
                    <form action="" class="  d-flex col-6">
                        <label for="" class="my-auto ">Filter</label>
                        <select name="" id="" class="mx-2 form-select">
                            <option value="">lerom</option>
                            <option value="">lerom</option>
                            <option value="">lerom</option>
                        </select>
                        <label for=" " class="my-auto">Sort</label>
                        <select name="" id="" class="mx-2 form-select">
                            <option value="">lerom</option>
                            <option value="">lerom</option>
                            <option value="">lerom</option>
                        </select>
                    </form>
                </div>
                <hr class="w-75 m-auto my-4">
                <div class="pb-5 ">
                <?php 
                    foreach($todos as $row){
                ?>
                    <div class="d-flex justify-content-between border-bottom border-1  py-2">
                        <input type="checkbox"  class="my-auto mx-5"  name="" id="">
                        <h3 class="w-50  fs-5"><?php echo $row['todos-task'] ; ?></h3>
                        <div class=" my-auto d-flex border border-success rounded-3">
                            <i class="fas fa-spinner my-auto p-2"></i>
                            <span class="my-auto px-2">17 Mar 2021</span>
                        </div>
                        <div class="d-flex mx-1">
                            <i class="fas fa-info-circle  my-auto px-2 btn btn-secondary mx-1"></i>
                            <i class="fas fa-trash-alt my-auto px-2 btn btn-danger mx-1"></i>
                            <i class="fas fa-edit my-auto px-2 btn btn-success mx-1"></i>
                        </div>
                    </div>

                    <?php } ?>
                    <!-- <div class="d-flex justify-content-between border-bottom border-1  py-2">
                        <input type="checkbox" class="my-auto mx-5"  name="" id="">
                        <h3 class="w-50  fs-5">Lorem, ipsum dolor sit</h3>
                        <div class=" my-auto d-flex border border-success rounded-3">
                            <i class="fas fa-spinner my-auto p-2"></i>
                            <span class="my-auto px-2">17 Mar 2021</span>
                        </div>
                        <div class="d-flex mx-1">
                            <i class="fas fa-info-circle  my-auto px-2 btn btn-secondary mx-1"></i>
                            <i class="fas fa-trash-alt my-auto px-2 btn btn-danger mx-1"></i>
                            <i class="fas fa-edit my-auto px-2 btn btn-success mx-1"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between border-bottom border-1  py-2">
                        <input type="checkbox" class="my-auto mx-5"  name="" id="">
                        <h3 class="w-50  fs-5">Lorem, ipsum dolor sit</h3>
                        <div class=" my-auto d-flex border border-success rounded-3">
                            <i class="fas fa-spinner my-auto p-2"></i>
                            <span class="my-auto px-2">17 Mar 2021</span>
                        </div>
                        <div class="d-flex mx-1">
                            <i class="fas fa-info-circle  my-auto px-2 btn btn-secondary mx-1"></i>
                            <i class="fas fa-trash-alt my-auto px-2 btn btn-danger mx-1"></i>
                            <i class="fas fa-edit my-auto px-2 btn btn-success mx-1"></i>
                        </div>
                    </div> -->
                </div>
            </div>

        </div>
    </div>




 
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>