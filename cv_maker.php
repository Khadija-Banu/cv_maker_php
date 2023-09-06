<?php

use App\CvMaker;
include 'vendor/autoload.php';

//data store
$cvmaker= new CvMaker();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $cvmaker->store($_POST);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cv Maker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
 <div class="card m-5">
    <div class="card-header">
        <h4>Cv Maker</h4>
    </div>
    <div class="card-body">
        <form action="" method="POST" id="add-form">
        <div class="row">
            <div class="col-md-6">
            
                <h5>Personal Information</h5>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required><br>
                <input type="text" name="f_name" class="form-control"  placeholder="Enter your father name" required><br>
                <input type="text" name="m_name" class="form-control"  placeholder="Enter your mother name" required><br>
                <input type="data" name="dob" class="form-control"  placeholder="Enter your date of birth" required><br>
                <div>
                    <label for="" name="gen" required>Gender</label>            
                    <input class="form-check-input" type="radio" name="gender" id="male">
                    <label class="form-check-label" for="male">Male</label>            
                    <input class="form-check-input" type="radio" name="gender" id="female" checked>
                    <label class="form-check-label" for="female">Female</label>   
                </div><br>
                    <select class="form-select  " name="marital_status" required>
                        <option >Marital status</option>
                        <option value="unmarried">Unmarried</option>
                        <option value="married">Married</option>
                    </select><br>

                    <select class="form-select"  name="nationality" required>
                    <option >Nationality</option>
                        <option value="bangladesh">Bangladesh</option>
                        <option value="india">India</option>
                    </select><br>
                <input type="text" name="national_id" class="form-control"  placeholder="Enter your national id" ><br>
                <input type="text" name="height" class="form-control"  placeholder="Enter your height" required><br>
                <input type="text" name="weight" class="form-control"  placeholder="Enter your weight" required><br>
                    <select class="form-select " name="religion" required>
                    <option >Religion</option>
                        <option value="muslim">Muslim</option>
                        <option value="hindu">Hindu</option>
                    </select><br>
                <textarea name="permanent_address" class="form-control"  placeholder="Enter your permanent address" required></textarea><br>
                <textarea name="current_address" class="form-control"  placeholder="Enter your current address" required></textarea><br>
                <textarea name="career_summary" class="form-control" placeholder="Enter your career summary " required></textarea> <br>
                <textarea name="language_proficiency" class="form-control"  placeholder="Enter your language proficiency" required></textarea><br>
                <textarea name="personal_strengths" class="form-control"  placeholder="Enter your personal strengths" required ></textarea>
              
            </div>
            <div class="col-md-6">
                <div>
                    <div class="show_msg"></div>
                    <h5>Academic Qualification</h5>
                    <div id="show-academic">
                        <div class="row-academic">
                        <input type="text" name="exam_title[]" class="form-control" placeholder="Enter your major subject" required><br>
                        <input type="text" name="institute[]" class="form-control"  placeholder="Enter your institute name" required><br>
                        <input type="text" name="result[]" class="form-control"  placeholder="Enter your result" required><br>
                        <input type="number" name="passing_year[]" class="form-control" placeholder="Enter your passing year" min="1999" max="2025" required><br>
                        <input type="text" name="duration[]" class="form-control"  placeholder="Enter your duration" required>
                    <button class="btn btn-sm btn-success add-item-btn mt-3">+ Add Skill</button>
                    </div>
                    </div>    
                </div> 
                <!-- <div>
                    <h5 class="mt-3">Professional Training Summary</h5>
                    <div id="show-professional">
                    <div>
                        <input type="text" name="training_title[]" class="form-control" placeholder="Enter your training title" required><br>
                        <input type="text" name="institute[]" class="form-control"  placeholder="Enter your institute name"required><br>
                        <input type="text" name="institute_location[]" class="form-control"  placeholder="Enter your institute location"required ><br>
                        <input type="number" name="passing_year[]" class="form-control" placeholder="Enter your passing year" min="1999" max="2025" required><br>
                        <input type="text" name="duration[]" class="form-control"  placeholder="Enter your duration"required>
                    <button class="btn btn-sm btn-success add-item-btn-pro mt-3">+ Add Skill</button> 
                    </div>    </div>   
                </div> 
                <div>
                    <h5 class="mt-3">Independent Professional Training Summary</h5>
                    <div id="show-independent">
                    <div>
                        <input type="text" name="independent_training_title[]" class="form-control" placeholder="Enter your independent training title"required><br>
                        <input type="number" name="complete_year[]" class="form-control" placeholder="Enter your completing year" min="1999" max="2025"required><br>
                        <input type="text" name="duration[]" class="form-control"  placeholder="Enter your duration"required> 
                    <button class="btn btn-sm btn-success add-item-btn-ind mt-3">+ Add Skill</button>
                    </div>       
                </div>  -->
            </div></div>
            
            <button type="submit" class="btn btn-primary" id="add_btn">Submit</button>
        </form>
    </div>
 </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $(".add-item-btn").click(function(e){
                e.preventDefault();
                $("#show-academic").prepend(` <div class="append_item">
                        <input type="text" name="exam_title[]" class="form-control" placeholder="Enter your major subject" required><br>
                        <input type="text" name="institute[]" class="form-control"  placeholder="Enter your institute name" required><br>
                        <input type="text" name="result[]" class="form-control"  placeholder="Enter your result" required><br>
                        <input type="number" name="passing_year[]" class="form-control" placeholder="Enter your passing year" min="1999" max="2025" required><br>
                        <input type="text" name="duration[]" class="form-control"  placeholder="Enter your duration" required>
                    <button class="btn btn-sm btn-danger remove-item-btn mt-3" type="submit">- Remove</button>
                    </div>`);
            });
            $(document).on('click','.remove-item-btn',function(e){
                e.preventDefault();
                let row=$(this).parent();
                $(row).remove();
            });
     
            $(".add-item-btn-pro").click(function(e){
                e.preventDefault();
                $("#show-professional").prepend(` <div>
                        <input type="text" name="training_title[]" class="form-control" placeholder="Enter your training title" required><br>
                        <input type="text" name="institute[]" class="form-control"  placeholder="Enter your institute name"required><br>
                        <input type="text" name="institute_location[]" class="form-control"  placeholder="Enter your institute location"required ><br>
                        <input type="number" name="passing_year[]" class="form-control" placeholder="Enter your passing year" min="1999" max="2025" required><br>
                        <input type="text" name="duration[]" class="form-control"  placeholder="Enter your duration"required>
                    <button class="btn btn-sm btn-danger remove-item-btn-pro mt-3">- Remove </button> 
                    </div> `);
            });
            $(document).on('click','.remove-item-btn-pro',function(e){
                e.preventDefault();
                let row=$(this).parent();
                $(row).remove();
            });

            $(".add-item-btn-ind").click(function(e){
                e.preventDefault();
                $("#show-independent").prepend(`   <div>
                        <input type="text" name="independent_training_title[]" class="form-control" placeholder="Enter your independent training title"required><br>
                        <input type="number" name="complete_year[]" class="form-control" placeholder="Enter your completing year" min="1999" max="2025"required><br>
                        <input type="text" name="duration[]" class="form-control"  placeholder="Enter your duration"required> 
                    <button class="btn btn-sm btn-danger remove-item-btn-ind mt-3">- Remove </button>
                    </div> `)

            });
            $(document).on('click','.remove-item-btn-ind',function(e){
                e.preventDefault();
                let row=$(this).parent();
                $(row).remove();
            });

            // $("#add-form").submit(function(e){
            //     e.preventDefault();
            //     $("#add_btn").val("adding...........");
            //     $.ajax({
            //         url:'action.php',
            //         method:'POST',
            //         data:$(this).serialize(),
            //         success:function(response){
            //             $('#add_btn').val('Add');
            //             $('#add-form')[0].reset();
            //             $('.append_item').remove();
            //             $('#show_msg').html(`<div class="alert alert-success">${response}</div>`)
            //         }

            //     })
            // })
     
    }
        
        )
    </script>
  </body>
</html>