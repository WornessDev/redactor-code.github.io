var url = "http://mysite.local";  //Адрес Вашего сайта
var title = "MySite";  //Название Вашего сайта
function addFavorite(a) {
try {
      window.external.AddFavorite(url, title);
}
catch (e) {
try {
        window.sidebar.addPanel (title, url, "");
}
catch (e) {
if (typeof(opera)=="object") {
          a.rel = "sidebar";
          a.title = title;
          a.url = url;
return true;
}
}
}
return false;
}