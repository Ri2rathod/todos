<?=$this->extend("layout/app")?>
<?=$this->section("body")?>
    <div class="container-md container-fluid-sm bg-light shadow ">
        <div class=" text-center mt-4 py-2  m-auto rounded">
            <h1 class="display-5">Todo-list</h1>
        </div>
        <div class="container-fluid  bg-light">
            <div class="row">
                <form autocomplete="off"  action="./add_todo" class="" method="POST">
                    <div class="  d-md-flex col-12 d-block ">
                        <input type="hidden" name="user-email" value="<?=session('user')?>">
                        <input type="text" class="form-control my-2" name="input_list" placeholder="Add Task" required>
                        <input type=" text" class="form-control my-2" name="due_data" id="datepicker" placeholder="Due Date">
                        <button type="submit" class="btn my-1 btn-primary px-auto mx-2">Add</button>
                    </div>
                </form>
            </div>
            <div class="container ">
                <div class="pt-3">
                    <form action="" class="  d-flex justify-content-evenly col-12 col-md-4 ms-auto">
                        <div class="col-5 ">
                            <label for="" class="my-auto ps-2">Filter</label>
                            <select name=""  class="mx-2 form-select">
                                <option value="">lerom</option>
                                <option value="">lerom</option>
                                <option value="">lerom</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <label for=" " class="my-auto ps-2">Sort</label>
                            <select name="" class="mx-2 form-select">
                                <option value="">lerom</option>
                                <option value="">lerom</option>
                                <option value="">lerom</option>
                            </select>
                        </div>
                    </form>
                </div>
                <hr class="w-75 m-auto my-4">
                <div class="pb-5 ">

                <?php 
                    if(isset($todos))
                    {
                        foreach($todos as $row)
                        {
                ?>
                    <div class="d-block d-md-flex justify-content-between border-bottom border-1  py-2">
                        <div class="d-flex justify-content-between">
                            <input type="checkbox"  class="my-auto  mx-sm-5"  name="">
                            <h3 class="w-auto  fs-5"><?php echo $row['todos-task'] ;?></h3>
                        </div>
                      
                        <div class="hover-tab my-auto d-flex border border-primary rounded-3">
                            <i class="fas fa-spinner text-primary my-auto p-2 loader"></i>
                            <span class="my-auto px-2"><?php echo $row['todos-due-date'] ;?></span>
                        </div>
                        <div class="d-flex mx-1 my-2 my-md-0 justify-content-between">
                           <a href="#"><i class="fas fa-info-circle  my-auto px-2 btn btn-secondary mx-auto mx-md-1"></i></a> 
                           <a href=""><i class="fas fa-trash-alt my-auto px-2 btn btn-danger mx-auto mx-md-1"></i></a> 
                            <a href=""><i class="fas fa-edit my-auto px-2 btn btn-success mx-auto mx-md-1"></i></a> 
                        </div>
                    </div>

                    <?php 
                    }
                }else{
                    ?>
                    <div class="d-block d-md-flex justify-content-between border-bottom border-1  py-2">
                        
                        <h2 class="display-4 text-center mx-auto">No Data Avelible</h2>
                    </div>
                    
                    
                    <?php
                }
                ?>

                    <!-- <div class="d-block d-md-flex justify-content-between border-bottom border-1  py-2">
                        <div class="d-flex justify-content-between">
                            <input type="checkbox"  class="my-auto mx-sm-5"  name="">
                            <h3 class="w-auto  fs-5">Lorem, ipsum dolor sit</h3>
                        </div>
                        <div class="hover-tab my-auto d-flex border border-success rounded-3">
                            <i class="fas fa-check text-success my-auto p-2 "></i>
                            <span class="my-auto px-2">17 Mar 2021</span>
                        </div>
                        <div class="d-flex mx-1 my-2 my-md-0 c">
                           <a href="#"><i class="fas fa-info-circle  my-auto px-2 btn btn-secondary mx-auto mx-md-1"></i></a> 
                           <a href=""><i class="fas fa-trash-alt my-auto px-2 btn btn-danger mx-auto mx-md-1"></i></a> 
                            <a href=""><i class="fas fa-edit my-auto px-2 btn btn-success mx-auto mx-md-1"></i></a> 
                        </div>
                    </div>


                    <div class="d-block d-md-flex justify-content-between border-bottom border-1  py-2">
                        <div class="d-flex justify-content-between">
                            <input type="checkbox"  class="my-auto  mx-sm-5"  name="">
                            <h3 class="w-auto  fs-5">Lorem, ipsum dolor sit</h3>
                        </div>
                        <div class="hover-tab my-auto d-flex border border-danger rounded-3">
                            <i class="fas fa-times text-danger my-auto p-2 "></i>
                            <span class="my-auto px-2">17 Mar 2021</span>
                        </div>
                        <div class="d-flex mx-1 my-2 my-md-0 justify-content-between">
                           <a href="#"><i class="fas fa-info-circle  my-auto px-2 btn btn-secondary mx-auto mx-md-1"></i></a> 
                           <a href=""><i class="fas fa-trash-alt my-auto px-2 btn btn-danger mx-auto mx-md-1"></i></a> 
                            <a href=""><i class="fas fa-edit my-auto px-2 btn btn-success mx-auto mx-md-1"></i></a> 
                        </div>
                    </div>
                     -->
                    
                   
                </div>
            </div>

        </div>
    </div>

    <?=$this->endSection()?>