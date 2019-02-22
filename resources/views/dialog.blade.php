
  <dialog class="mdl-dialog">
    <form action="/checkPassword">
      @csrf 
      <h4 class="mdl-dialog__title">Error</h4>
      <div class="mdl-dialog__content">
        <p>
          Re-enter your password
        </p>
          <div class="mdl-textfield mdl-js-textfield">
            <input name="password" class="mdl-textfield__input" type="text" id="sample1">
            <label class="mdl-textfield__label" for="sample1">Ex. 123456789</label>
          </div>
      </div>
      <div class="mdl-dialog__actions">
        <button type="submit" class="mdl-button sign-in">Sign-in</button>
        <button style="color:#940b0b" type="button" class="mdl-button close">Close</button>
      </div>
    </form> 
  </dialog>
  <script>
      var dialog = document.querySelector('dialog');
      var showDialogButton = document.querySelectorAll('.show-dialog');
      for(var i = 0; i < showDialogButton.length; i++) {
        if (! dialog.showModal) {
          dialogPolyfill.registerDialog(dialog);
        }

        showDialogButton[i].addEventListener('click', function() {
          dialog.showModal();
        });

        dialog.querySelector('.close').addEventListener('click', function() {
          dialog.close();
        });
      }
  </script>
