<?php if (isset($_GET['subscribed'])) : ?>


  <div class="modal" id="thankyouModal">
    <div class="modal-content">
      <img src="/img/Logo.svg" alt="">
      <h3 class="modal-title">Спасибо за подписку! ✅</h3>
      <p class="modal-text">Теперь вы будете первыми узнавать о новых акциях.</p>
      <button onclick="closeModal()" class="btn btn-cta btn-modal">Закрыть</button>
    </div>
  </div>

  <script>
    function closeModal() {
      document.getElementById('thankyouModal').style.display = 'none';
      // Удаляем параметр из URL без перезагрузки:
      history.replaceState({}, document.title, window.location.pathname);
    }
  </script>
<?php endif; ?>