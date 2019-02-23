

@if(isset($password))
  <div class="error-message">
    <div class="error-message-box">
      <p>Sorry, {{$password}} is not a correct password</p>
    </div>
  </div>
@endif

<div style="padding: 37px;">
  <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
    <thead>
      <tr>
        <th class="mdl-data-table__cell--non-numeric">ID</th>
        <th class="mdl-data-table__cell--non-numeric">Title</th>
        <th style="width: 100%" class="mdl-data-table__cell--non-numeric">Content</th>
        <th class="mdl-data-table__cell--non-numeric">Sent at</th>
      </tr>
    </thead>
    <tbody>
      @if (isset($messages))
        @for ( $i = 0; $i < count($messages); $i++ )
          <tr>
            <td class="mdl-data-table__cell--non-numeric">{{$messages[$i]['id']}}</td>  
            <td id="{{$messages[$i]['title']}}" class="mdl-data-table__cell--non-numeric">{{$messages[$i]['title']}}</td>
            <td class="mdl-data-table__cell--non-numeric show-dialog">**Content is hidden**  <a class="show-dialog">Re-enter The password to see the content</span></a>
            <td class="mdl-data-table__cell--non-numeric">{{$messages[$i]['date']}}</td>
          </tr>
        @endfor
      @endif
    </tbody>
  </table>
</div>

<footer class="mdl-mini-footer">
  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo">FTC Mail</div>
    <ul class="mdl-mini-footer__link-list">
      <li><a href="#">❤️ Developed by Wadhah Essam from FTC ❤️</li>
    </ul>
  </div>
</footer>
