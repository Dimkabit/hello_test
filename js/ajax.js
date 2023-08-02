  $(document).ready(function() {
    $("#btn").click(function() {
      sendAjaxForm();
    });
  });

  function sendAjaxForm() {
    // Получаем данные из формы
    var formData = $("#ajax_form").serialize();

    $.ajax({
      url: 'php/action_ajax_form.php', // URL страницы (action_ajax_form.php)
      type: 'POST', // Метод отправки
      dataType: 'json', // Формат данных - ожидаем JSON от сервера
      data: formData,
      success: function(response) {
        // Данные отправлены успешно
        $('#result_form').html('E-mail: ' + response.email + '<br>Text: ' + response.text);
      },
      error: function() {
        // Данные не отправлены
        $('#result_form').html('Ошибка. Данные не отправлены.');
      }
    });
  }
