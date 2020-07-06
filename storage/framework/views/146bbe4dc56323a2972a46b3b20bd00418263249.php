
<?php $__env->startSection('title','Thêm bài viết'); ?>
<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="app-main__outer">
  <div class="app-main__inner">
      <div class="app-page-title">
          <div class="row">
              <div class="col-10">
                  <h3><strong>Thêm bài viết</strong></h3>
              </div>
              <div class="col-2">
              </div>
          </div>
      </div>
      <div class="main-card mb-3 card">
          <div class="card-body">
              <div class="row">
                  <div class="col-8">
                      <div class="form-group">
                          <label><strong>Tiêu đề</strong></label>
                          <input type="text" class="form-control">
                      </div>
                  </div>
                  <div class="col-8">
                    <div class="form-group">
                        <label><strong>Người viết</strong></label>
                        <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-8">
                      <div class="form-group">
                          <label><strong>Nội dung</strong></label>
                          <textarea class="form-control" placeholder="nhập nội dung nè..."></textarea>
                      </div>
                  </div>
                  
                  <div class="col-6">
                      <label><strong>Thêm ảnh</strong></label>

                      <form id="file-upload-form" class="uploader">
                          <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

                          <label class="long-lable" for="file-upload" id="file-drag">
                              <img id="file-image" src="#" alt="Preview" class="hidden">
                              <div id="start">
                                  <i class="fa fa-upload" aria-hidden="true"></i>
                                  <div id="notimage" class="hidden"></div>
                                  <span id="file-upload-btn"></span>
                              </div>
                              <div id="response" class="hidden">
                                  <div id="messages"></div>
                              </div>
                          </label>
                      </form>
                  </div>
                  <div class="col-8 mt-4">
                      <div class="form-group">
                        <input type="submit" name="add" value="Thêm" class="btn btn-success">
                        <input type="submit" name="cancel" value="Trở lại" class="btn btn-primary">
                          
                      </div>
                  </div>
              </div>

              
          </div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
      'use strict';
      window.addEventListener('load', function () {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function (form) {
              form.addEventListener('submit', function (event) {
                  if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                  }
                  form.classList.add('was-validated');
              }, false);
          });
      }, false);
  })();
</script>
<script>
  // File Upload
  // 
  function ekUpload() {
      function Init() {

          console.log("Upload Initialised");

          var fileSelect = document.getElementById('file-upload'),
              fileDrag = document.getElementById('file-drag'),
              submitButton = document.getElementById('submit-button');

          fileSelect.addEventListener('change', fileSelectHandler, false);

          // Is XHR2 available?
          var xhr = new XMLHttpRequest();
          if (xhr.upload) {
              // File Drop
              fileDrag.addEventListener('dragover', fileDragHover, false);
              fileDrag.addEventListener('dragleave', fileDragHover, false);
              fileDrag.addEventListener('drop', fileSelectHandler, false);
          }
      }

      function fileDragHover(e) {
          var fileDrag = document.getElementById('file-drag');

          e.stopPropagation();
          e.preventDefault();

          fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
      }

      function fileSelectHandler(e) {
          // Fetch FileList object
          var files = e.target.files || e.dataTransfer.files;

          // Cancel event and hover styling
          fileDragHover(e);

          // Process all File objects
          for (var i = 0, f; f = files[i]; i++) {
              parseFile(f);
              uploadFile(f);
          }
      }

      // Output
      function output(msg) {
          // Response
          var m = document.getElementById('messages');
          m.innerHTML = msg;
      }

      function parseFile(file) {

          console.log(file.name);
          output(
              '<strong>' + encodeURI(file.name) + '</strong>'
          );

          // var fileType = file.type;
          // console.log(fileType);
          var imageName = file.name;

          var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
          if (isGood) {
              document.getElementById('start').classList.add("hidden");
              document.getElementById('response').classList.remove("hidden");
              document.getElementById('notimage').classList.add("hidden");
              // Thumbnail Preview
              document.getElementById('file-image').classList.remove("hidden");
              document.getElementById('file-image').src = URL.createObjectURL(file);
          }
          else {
              document.getElementById('file-image').classList.add("hidden");
              document.getElementById('notimage').classList.remove("hidden");
              document.getElementById('start').classList.remove("hidden");
              document.getElementById('response').classList.add("hidden");
              document.getElementById("file-upload-form").reset();
          }
      }

      function setProgressMaxValue(e) {
          var pBar = document.getElementById('file-progress');

          if (e.lengthComputable) {
              pBar.max = e.total;
          }
      }

      function updateFileProgress(e) {
          var pBar = document.getElementById('file-progress');

          if (e.lengthComputable) {
              pBar.value = e.loaded;
          }
      }

      function uploadFile(file) {

          var xhr = new XMLHttpRequest(),
              fileInput = document.getElementById('class-roster-file'),
              pBar = document.getElementById('file-progress'),
              fileSizeLimit = 1024; // In MB
          if (xhr.upload) {
              // Check if file is less than x MB
              if (file.size <= fileSizeLimit * 1024 * 1024) {
                  // Progress bar
                  pBar.style.display = 'inline';
                  xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
                  xhr.upload.addEventListener('progress', updateFileProgress, false);

                  // File received / failed
                  xhr.onreadystatechange = function (e) {
                      if (xhr.readyState == 4) {
                          // Everything is good!

                          // progress.className = (xhr.status == 200 ? "success" : "failure");
                          // document.location.reload(true);
                      }
                  };

                  // Start upload
                  xhr.open('POST', document.getElementById('file-upload-form').action, true);
                  xhr.setRequestHeader('X-File-Name', file.name);
                  xhr.setRequestHeader('X-File-Size', file.size);
                  xhr.setRequestHeader('Content-Type', 'multipart/form-data');
                  xhr.send(file);
              } else {
                  output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
              }
          }
      }

      // Check for the various File API support.
      if (window.File && window.FileList && window.FileReader) {
          Init();
      } else {
          document.getElementById('file-drag').style.display = 'none';
      }
  }
  ekUpload();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\blog\resources\views/admin/postCtrl/add.blade.php ENDPATH**/ ?>