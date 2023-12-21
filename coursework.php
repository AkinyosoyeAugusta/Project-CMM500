<?php 

include "./header.php";
include "./function.php";
if(!isLoggedIn())
{
    header('location:login.php');
    exit();
}
?>
      <section class="bg-body-tertiary">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="border border-1 w-100" style="height:460px" id="poster-container">
                      <img src="" alt="image" class="gam__img-preview" id="img-content">
                    </div>
                    <div class="w-100">
                        <div class="text-start mb-3 ">
                            <ul class="nav nav-pills d-flex justify-content-start py-2 mb-3 border border-top-0 border-bottom-1 border-start-0 border-end-0 border-2" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active bg-light rounded-0 border border-0 text-dark fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Module</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-muted bg-light fw-bold" id="pills-review-tab" data-bs-toggle="pill" data-bs-target="#pills-video" type="button" role="tab" aria-controls="pills-video" aria-selected="false">Media</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-muted bg-light fw-bold" id="pills-material-tab" data-bs-toggle="pill" data-bs-target="#pills-material" type="button" role="tab" aria-controls="pills-review" aria-selected="false">Ebook</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-muted bg-light fw-bold" id="pills-quiz-tab" data-bs-toggle="pill" data-bs-target="#pills-quiz" type="button" role="tab" aria-controls="pills-quiz" aria-selected="false">Quiz</button>
                                </li>
                               
                            </ul>   
                            <div class="tab-content border border-0 p-3 " id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                   <div class="ps-1 lh-sm text-start ps-2">
                                        <h5 class="fw-bold text-dark fs-3 mb-0" id="topic">
                                           Loading....
                                        </h5>
                                        <span class="fw-bold small text-muted " >
                                           
                                              
                                          </i>
                                        </span>
                                        <p class="text-start text-muted small py-3" id="content" style="max-height:520px;overflow:auto;">
                                           
                                        </p>
                                        <div class="py-2">
                                            

                                            <!-- begin wwww.htmlcommentbox.com -->
                                                  <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Box</a> is loading comments...</div>
                                                  <link rel="stylesheet" type="text/css" href="https://www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
                                                  <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="https://www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24qBgB9LEcTF7ydj99DZ2ba."+"&opts=16798&num=10&ts=1702122567407");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})();  </script>
                                                  <!-- end www.htmlcommentbox.com -->

                                                  <input type="hidden" id="userd" name="userd" value=" <?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ""; ?>
">
                                          
                                        </div>
                                       
                                   </div>
                                   
                                </div>
                                <div class="tab-pane fade" id="pills-material" role="tabpanel" aria-labelledby="pills-material-tab" tabindex="0">
                                <div class="container">
                                      <div class="row">
                                          <div class="col-12">
                                              <div class="lh-sm text-center">
                                                  <h3 class="fw-bold"> Download Ebook for this course</h3>
                                                  <span class="small"> </span>
                                               
                                                  <a href="#" class="btn btn-primary rounded-pill  btn-md small" id="materialcourse" download>Download Ebook</a>
                                                </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab" tabindex="0">
                                  <div class="container">
                                    <div class="row py-4">
                                      <div class="col-12">
                                      <iframe width="560" height="315"  id="gam_video" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                   
                                <div class="tab-pane fade" id="pills-quiz" role="tabpanel" aria-labelledby="pills-quiz-tab" tabindex="0">
                                    <div class="container">
                                      <div class="row">
                                          <div class="col-12">
                                              <div class="lh-sm text-center">
                                                  <h3 class="fw-bold"> Ready for quiz</h3>
                                                  <span class="small"> Test yourself on the skills in this course and earn mastery points for what you already know!</span>
                                                  <p class="pt-4 fw-bold">10 questions in 15secs each</p>
                                                  <a href="#" class="btn btn-primary rounded-pill  btn-md small" id="startquizcourse">Start Quiz</a>
                                                </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                
                  
                    <div class="accordion rounded-0 w-100" id="accordionExample">
                        
                        
                       
                      </div>
                       
                    

                </div>
            </div>
        </div>
      </section>



      <!--course-content-->
    </main>
<?php 

include "./footer.php";

?> 
<script>
$(document).ready(function () {
 
  const usr = localStorage.getItem('user');

  const usr2 = $('#userd').val();
  const realuser = usr ?? usr2;

  function updateUserExperiencePoints(user, xps) {
    const endpointUrl = 'admin/api/user/xps.php';

    const requestData = {
      user: user,
      xps: xps
    };

    $.post(endpointUrl, requestData, function (response) {
      // Handle the response from the backend
     
    });
  }


  function getUrlParameters() {
    const urlParams = new URLSearchParams(window.location.search);
    const params = {};

    for (const [key, value] of urlParams.entries()) {
      params[key] = value;
    }

    return params;
  }

  const parameters = getUrlParameters();

  const courseId = parameters.course;
  const courseName = parameters.name;
  const cn = parameters.cn;

  function getYouTubeVideoId(url) {
            var urlParams = new URLSearchParams(new URL(url).search);
            return urlParams.get("v");
        }

        // Call the function and log the result
      
  //hide elements

  $('#pills-video-tab').hide();
  $('#pills-quiz-tab').hide();
  $('#pills-material-tab').hide();

  $.ajax({
    url: 'admin/api/module/moduleView.php', 
    method: 'GET',
    dataType: 'json',
    success: function (response) {

      let result = response.data.filter((value, index) => value.course_id === courseId);

   
      if (result.length >= 1) {
        $('#pills-video-tab').show();
        $('#pills-material-tab').show();
        $('#pills-quiz-tab').show();
        $('#topic').html(result[0].name);
        $('#content').html(result[0].description);
        result[0].poster ? $('#img-content').attr('src', 'admin/uploads/' + result[0].poster) : $('#poster-container').css('display', 'none');
        $('#startquizcourse').attr('href', 'quiz.php?course=' + result[0].course_id + '&name=' + courseName+'&cn='+cn);
       
       result[0].material ? $('#materialcourse').attr('href','admin/Material/'+result[0].material) :   $('#pills-material-tab').hide();
       result[0].link ? $('#gam_video').attr('src','https://www.youtube.com/embed/'+getYouTubeVideoId(result[0].link)) :   $('#pills-video-tab').hide();
     
      } else {
        $('#topic').html(courseName);
        $('#content').html("<strong>The author is yet to upload contents for this course</strong>");
        $('#poster-container').css('display', 'none');
      }
      

      // Handle the successful response here
      let mod = response.data
        .filter((value, index) => value.course_id === courseId)
        .map((value, index) => `
          <div class="accordion-item rounded-0" data-module="${value.module_id}">
            <h2 class="accordion-header rounded-0">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${index}" aria-expanded="true" aria-controls="collapse${index}">
                Module # ${index + 1}
              </button>
            </h2>
            <div id="collapse${index}" class="accordion-collapse collapse show" data-bs-parent="#accordionExample" style="max-height: 40px; overflow:hidden; white-space:nowrap; text-overflow:ellipsis">
              <div class="accordion-body overflow-hidden" style="text-overflow:ellipsis;white-space:nowrap">
                <h6 class="fw-bold text-start">${value.title}</h6>
                <span class="small">${value.content}</span>
              </div>
            </div>
          </div>
        `);

      $('#accordionExample').html(mod);

      $('.accordion-button').off('click');

    
      $('.accordion-button').on('click', function () {
        const module_id = $(this).closest('.accordion-item').data('module');
        
        const clickedModule = response.data.filter((value, i) => value.module_id === module_id.toString());
     

  $('#topic').html(clickedModule[0].title || ''); 
  $('#content').html(clickedModule[0].content || ''); 

        const startTime = new Date().getTime();
          let experiencePoints = 0;
          const timerInterval = setInterval(function () {
              const currentTime = new Date().getTime();
              const elapsedTime = (currentTime - startTime) / 1000; 

               experiencePoints = Math.floor(elapsedTime / 10) * 1; 
              console.log(experiencePoints)
              updateUserExperiencePoints(realuser, experiencePoints);
              $('#experienceContainer').html(`Experience Points: ${experiencePoints}`);
          }, 5000);  
      });

    },
    error: function (xhr, status, error) {
     
      console.error('Error:', status, error);
    }
  });

});

</script>

   </body>
   </html>