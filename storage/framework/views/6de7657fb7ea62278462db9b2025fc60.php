<body>

    
    <?php $__env->startSection('content'); ?>

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
          <div class="table-cell">
            <div class="container">
              <!--<p class="display-6 color-d">Hello, world!</p>-->
              <h1 class="hero-title mb-4">I am Aidid Danish </h1>
              <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
              <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
            </div>
          </div>
        </div>
    </div><!-- End Hero Section -->

    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="title-box-2">
                        <h5 class="title-left">
                          List of Student
                        </h5>
                      </div>

                        <table class="table table-striped table-dark">
                            <thead>
                              <tr>
                                <th scope="col">Matric ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone No</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Aidid Danish</td>
                                <td>Suhaily</td>
                                <td>aidxxd.dan11@gmail.com</td>
                                <td>019-4488410</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>fat@gmail.com</td>
                                <td>0140224384</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>Bird</td>
                                <td>twitt@yahoo.com</td>
                                <td>0127359243</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Ibrahim</td>
                                <td>Saad</td>
                                <td>saad@yahoo.com</td>
                                <td>0127359243</td>
                              </tr>
                            </tbody>
                          </table>

                      </div>
                    </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Contact Section -->

    <?php $__env->stopSection(); ?>
</body>

<thead>
    <tbody>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td> <?php echo e($student->matric_id); ?> </td>
                <td> <?php echo e($student->first_name); ?> </td>
                <td> <?php echo e($student->last_name); ?> </td>
                <td> <?php echo e($student->email); ?> </td>
                <td> <?php echo e($student->phone_no); ?> </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</thead>

</html>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myFolioo\resources\views/student.blade.php ENDPATH**/ ?>