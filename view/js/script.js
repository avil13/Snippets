jQuery(document).ready(function($) {
    hljs.initHighlightingOnLoad();
    hljs.configure({
        tabReplace: '    '
    });

    var hLine = function () {
        $('.doc').each(function(i, e) {
            hljs.highlightBlock(e);
        });
    };

    var info = function() {
        $('.get-info').off('clock').on('click', function() {
            var param = $(this).attr('data-action');
            $.get('.?a=get_info' + '&p=' + param, function(data) {
                console.log(data);

                $('#html').html(data.html);
                $('#js').html(data.js);
                $('#css').html(data.css);
                $('#snippet-title').html(data.desc.title);
                $('#snippet-description').html(data.desc.description);
                hLine();
            });
            return false;
        });
    };

    var resizeIframe = function() {
        $('.iframe').each(function(i, el) {
            el.height = el.contentWindow.document.body.scrollHeight + "px";
        });
    };

    var listCollection = function(arr) {
        var html = '';
        $.each(arr, function(i, v) {
            html += '<a href="' + i + '" data-action="' + v + '" class="get-info file blue-grey darken-4 collection-item">' +
                '<h6 class="btn">Snippet</h6><hr>' +
                '<iframe src="' + v + '" align="center" class="iframe" marginheight="20"></iframe></a>';
        });
        $('.file-list').html(html);
        info();
        resizeIframe();
    };

    $('.action').click(function() {
        var param = $(this).attr('data-action');
        $.get('.?a=file_list' + '&p=' + param, function(data) {
            console.log(data);
            listCollection(data);
        });
        return false;
    });
});