
  <dialog class="mdl-dialog dialog1">
    <form action="/checkPassword">
    {{ csrf_field() }}
      <h4 class="mdl-dialog__title">Error</h4>
      <div class="mdl-dialog__content">
        <p>
          Due to inactivity please re-enter your password
        </p>
        <span class="mdl-chip mdl-chip--contact">
          <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">X</span>
          <span class="mdl-chip__text">Error Number: 0x{{$errorNo}}</span>
        </span>
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
      var dialog = document.querySelector('.dialog1');
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
