@include('template.header')


@yield('content')
<script>
$('#id_variant').change(function () {
    $.ajax({
        url: "{{route('more')}}", 
        cache: false, 
        data: { id_variant : $("#id_variant").val() },
        type: "POST",
    beforeSend: function(request) { 
    return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
},
    success: function(html) { 
        $('.levyi').html('');
        $('.levyi').append(html);} //контент подгружается в div#content

        })
return false
});

</script>

@include('template.footer')