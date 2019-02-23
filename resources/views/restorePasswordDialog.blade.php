
  <dialog class="mdl-dialog dialog2">
    <form action="/restorePassword">
    {{ csrf_field() }}
      <div class="mdl-dialog__content">
        <span class="mdl-chip mdl-chip--contact">
          <span style="padding-left: 10px" class="mdl-chip__text">{{$restoreQuestion}}</span>
        </span>
        <div class="mdl-textfield mdl-js-textfield">
          <input name="answer" class="mdl-textfield__input" type="text" id="sample1">
          <label class="mdl-textfield__label" for="sample1">Answer</label>
        </div>
      </div>
      <div class="mdl-dialog__actions">
        <button type="submit" class="mdl-button sign-in">Restore</button>
        <button style="color:#940b0b" type="button" class="mdl-button close">Close</button>
      </div>
    </form> 
  </dialog>
  <script>
      var dialog2 = document.querySelector('.dialog2');
      var showDialogButton2 = document.querySelectorAll('.show-dialog2');
      for(var i = 0; i < showDialogButton2.length; i++) {
        if (! dialog2.showModal) {
          dialogPolyfill.registerDialog(dialog2);
        }

        showDialogButton2[i].addEventListener('click', function() {
          dialog2.showModal();
        });

        dialog2.querySelector('.close').addEventListener('click', function() {
          dialog2.close();
        });
      }
  </script>
