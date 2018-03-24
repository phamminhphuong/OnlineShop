<div class="footer_title">HƯỚNG DẪN SỬ DỤNG</div>
<ul class="footer-box">
    @foreach($instructions as $instruction)
    <li>
        <a href="#" title="{!! $instruction->id !!}">{!! $instruction->id !!}</a>
    </li>
    @endforeach
</ul>