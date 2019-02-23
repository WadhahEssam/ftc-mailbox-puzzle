

@if(isset($password))
  <div class="error-message">
      <span style="background: #c18282;color: white;" class="mdl-chip mdl-chip--contact">
        <span style="padding-left:10px" class="mdl-chip__text">Sorry, {{$password}} is not a correct password</span>
      </span>
  </div>
@endif

@if(isset($answer))
  <div class="error-message">
      <span style="background: #c18282;color: white;" class="mdl-chip mdl-chip--contact">
        <span style="padding-left:10px" class="mdl-chip__text">We couldn't authanticate your account, {{$answer}} is not the correct answer</span>
      </span>
  </div>
@endif

<div style="padding: 37px;">
  <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
    <thead>
      <tr>
        <th class="mdl-data-table__cell--non-numeric">ID</th>
        <th class="mdl-data-table__cell--non-numeric">Title</th>
        <th class="mdl-data-table__cell--non-numeric">Sender</th>
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
            <td class="mdl-data-table__cell--non-numeric">
              <span class="mdl-chip mdl-chip--contact">
                <span style="padding-left: 10px" class="mdl-chip__text">{{$messages[$i]['sender']}}</span>
              </span>  
            </td>
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
    <ul class="mdl-mini-footer__link-list">
      <li><a class="footer-text" href="#">Developed by Wadhah Essam from FTC ❤️</li>
    </ul>
  </div>
</footer>
