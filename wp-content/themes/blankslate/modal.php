<div class="modal" id="modal-contact">
    <div class="modal__container">
        <h2 class="headline-2">
            оставить заявку
        </h2>
        <?php echo do_shortcode('[contact-form-7 id="56a0c87" title="Оставить заявку"]') ?>
        <div class="close-popup"></div>
    </div>
</div>

<div class="modal" id="modal-career">
    <div class="modal__container">
        <h2 class="headline-2">
            Откликнуться на вакансию
        </h2>
        <?php echo do_shortcode('[contact-form-7 id="17ffb38" title="Отклик на вакансию"]') ?>
        <div class="close-popup"></div>
    </div>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function() {
      const fileInput = document.getElementById('file-input');
      const fileNameDisplay = document.getElementById('file-name');
      const fileLabel = document.getElementById('updateName');

    //   fileLabel.addEventListener('click', function() {
    //      fileInput.click();
    //   });

      fileInput.addEventListener('change', function() {
         if (fileInput.files.length > 0) {
            fileLabel.textContent = fileInput.files[0].name;
            fileLabel.classList.add('custom-file-label');
         } else {
            fileLabel.textContent = 'Прикрепить резюме';
            fileLabel.classList.remove('custom-file-label');
         }
      });
   });
</script>
