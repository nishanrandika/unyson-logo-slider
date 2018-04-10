/*
 * @company name : Eight25Media
 * @auther : Tharindu Wickramasinghe
 * @date : 10/04/2018
 * @description : Logo slider javascript scripts.
 */


(function($, window, document) {

    /*
        @attribute : data-eql-height
        @param: any string, same name for eql elements.
     */

    $(function() {

        var eqlHeight = {};
        var count = $("[data-eql-height]").length;

        $("[data-eql-height]").each(function(e){
            var _eh = $(this).attr("data-eql-height");
            var _h = $(this).height();
            if(eqlHeight[_eh]){
                eqlHeight[_eh] = eqlHeight[_eh] < _h ? _h : eqlHeight[_eh];
            } else {
                eqlHeight[_eh] = $(this).height();
            }
            count--;
            if(count < 1){
                asignHeight();
            }
        });

        function asignHeight(){
            for (var k in eqlHeight) {
                var _ele = "[data-eql-height='" + k + "']";
                $(_ele).height(eqlHeight[k]+"px");
            }
        }
    });


    /*
        @attribute : image-src change on hover
        @param: any string, source url s for data-hover-src and  data-default-src for image element.
     */
    $(function(){
        $("[data-hover-src]").each(function(){
            var _selftImgElement = $(this);
            _selftImgElement.parents('a').hover(function(){
                _selftImgElement.attr('src', _selftImgElement.attr('data-hover-src'));
            }, function(){
                _selftImgElement.attr('src', _selftImgElement.attr('data-default-src'));

            })
        });
    });

}(window.jQuery, window, document));