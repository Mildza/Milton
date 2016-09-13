
function syntaxHighlights() {
    var ca = document.getElementsByTagName("pre");
    for(var i=0; i < ca.length; i++){
        var data = ca[i].innerHTML;
        data = data.replace(/"(.*?)"/g, '<span class="pre-str">&quot;$1&quot;</span>');
        data = data.replace(/&lt;(.*?)&gt;/g, '<span class="pre-elem">&lt;$1&gt;</span>');
        data = data.replace(/\/\/(.*?)\n/g, '<span class="pre-com">//$1</span>');
        data = data.replace(/\((.*?)\)\n/g, '<span class="pre-p">($1)</span>');
        //data = data.replace(/\{(.*?)\}\n/g, '<span class="pre-elem">{$1}</span>');
        data = data.replace(/\{(.*?)\n*(.*?)\n*(.*?)\n*(.*?)\n*(.*?)\n*\}/g, '<span class="pre-elem">$1$&\n</span>');

        ca[i].innerHTML = data;
    }
}
window.addEventListener("load", syntaxHighlights);
