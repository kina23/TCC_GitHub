<script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.21451" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.21451" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.21451" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/imageinfo.js?v=3.3.21451" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/file-uploader/fileuploader.js?v=3.3.21451"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.21451" type="text/javascript"></script>
<script type="text/javascript">
	JotForm.init(function(){
if (window.JotForm && JotForm.accessible) $('input_8').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_13').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_14').setAttribute('tabindex',0);

 JotForm.calendarMonths = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
 JotForm.calendarDays = ["Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado","Domingo"];
 JotForm.calendarOther = {"today":"Hoje"};
 var languageOptions = document.querySelectorAll('#langList li');
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) {
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("16", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 }
 JotForm.setCalendar("16", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;
      setTimeout(function() {
          JotForm.initMultipleUploads();
      }, 2);
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"cadastreSeu","qid":"1","text":"Cadastre seu livro aqui ","type":"control_head"},{"name":"submit","qid":"2","text":"Register Product","type":"control_button"},null,null,null,null,null,{"name":"titulo","qid":"8","text":"Titulo","type":"control_textbox"},null,null,null,null,{"description":"","name":"autor","qid":"13","subLabel":"","text":"Autor ","type":"control_textbox"},{"description":"","name":"editora","qid":"14","subLabel":"","text":"Editora ","type":"control_textbox"},{"description":"","name":"imagemDo","qid":"15","subLabel":"","text":"Imagem do Livro","type":"control_fileupload"},{"description":"","name":"data","qid":"16","text":"Data","type":"control_datetime"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"cadastreSeu","qid":"1","text":"Cadastre seu livro aqui ","type":"control_head"},{"name":"submit","qid":"2","text":"Register Product","type":"control_button"},null,null,null,null,null,{"name":"titulo","qid":"8","text":"Titulo","type":"control_textbox"},null,null,null,null,{"description":"","name":"autor","qid":"13","subLabel":"","text":"Autor ","type":"control_textbox"},{"description":"","name":"editora","qid":"14","subLabel":"","text":"Editora ","type":"control_textbox"},{"description":"","name":"imagemDo","qid":"15","subLabel":"","text":"Imagem do Livro","type":"control_fileupload"},{"description":"","name":"data","qid":"16","text":"Data","type":"control_datetime"}]);}, 20);
</script>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.21451" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.21451" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.21451" />
<form class="jotform-form" action="https://submit.jotform.com/submit/203084788088669/" method="post" enctype="multipart/form-data" name="form_203084788088669" id="203084788088669" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="203084788088669" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Cadastre seu livro aqui
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Insira as informações do seu livro
            </div>
          </div>
        </div>
      </li>
        <!---------------------------------------- Texto Título  ------------------------------------------------!-->
      <li class="form-line" data-type="control_textbox" id="id_8">
        <label class="form-label form-label-top form-label-auto" id="label_8" for="input_8"> Título </label>
        <div id="cid_8" class="form-input-wide" data-layout="half">
          <input type="text" id="input_8" name="q8_titulo" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" placeholder=" " data-component="textbox" aria-labelledby="label_8" />
        </div>
      </li>
      <!---------------------------------------- Texto Autor  ------------------------------------------------!-->
      <li class="form-line" data-type="control_textbox" id="id_13">
        <label class="form-label form-label-top form-label-auto" id="label_13" for="input_13"> Autor </label>
        <div id="cid_13" class="form-input-wide" data-layout="half">
          <input type="text" id="input_13" name="q13_autor" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_13" />
        </div>
      </li>
      <!---------------------------------------- Texto Editora  ------------------------------------------------!-->
      <li class="form-line" data-type="control_textbox" id="id_14">
        <label class="form-label form-label-top form-label-auto" id="label_14" for="input_14"> Editora </label>
        <div id="cid_14" class="form-input-wide" data-layout="half">
          <input type="text" id="input_14" name="q14_editora" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_14" />
        </div>
      </li>
      <!---------------------------------------- Texto Data  ------------------------------------------------!-->
      <li class="form-line" data-type="control_datetime" id="id_16">
        <label class="form-label form-label-top form-label-auto" id="label_16" for="lite_mode_16"> Data de publicação</label>
        <div id="cid_16" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="month_16" name="q16_data[month]" size="2" data-maxlength="2" maxLength="2" value="" autoComplete="off" aria-labelledby="label_16 sublabel_16_month" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="month_16" id="sublabel_16_month" style="min-height:13px" aria-hidden="false"> Mês </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="day_16" name="q16_data[day]" size="2" data-maxlength="2" maxLength="2" value="" autoComplete="off" aria-labelledby="label_16 sublabel_16_day" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="day_16" id="sublabel_16_day" style="min-height:13px" aria-hidden="false"> dia </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="year_16" name="q16_data[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" autoComplete="off" aria-labelledby="label_16 sublabel_16_year" />
                <label class="form-sub-label" for="year_16" id="sublabel_16_year" style="min-height:13px" aria-hidden="false"> Ano </label>
              </span>
            </div>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_16" size="12" data-maxlength="12" maxLength="12" data-age="" value="" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY" autoComplete="off" aria-labelledby="label_16 sublabel_16_litemode" />
              <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_16_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
              <label class="form-sub-label" for="lite_mode_16" id="sublabel_16_litemode" style="min-height:13px" aria-hidden="false"> Data </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fileupload" id="id_15">
        <label class="form-label form-label-top form-label-auto" id="label_15" for="input_15"> Imagem do Livro </label>
        <div id="cid_15" class="form-input-wide" data-layout="full">
          <div class="jfQuestion-fields" data-wrapper-react="true">
            <div class="jfField isFilled">
              <div class="jfUpload-wrapper">
                <div class="jfUpload-container">
                  <div class="jfUpload-text-container">
                    <div class="jfUpload-icon forDesktop">
                      <span class="iconSvg  dhtupload ">
                        <svg viewBox="0 0 54 47" version="1.1" xmlns="http://www.w3.org/2000/svg">
                          <g stroke="none" strokeWidth="1" fill="none">
                            <g transform="translate(-1506.000000, -2713.000000)">
                              <g transform="translate(1421.000000, 2713.000000)">
                                <path d="M125.212886,10.1718048 C127.110227,10.3826204 128.89335,10.9096517 130.562307,11.7529143 C132.231264,12.596177 133.689384,13.676591 134.93671,14.9941889 C136.184036,16.3117868 137.167828,17.8226097 137.888114,19.5267029 C138.608401,21.2307962 138.968539,23.049054 138.968539,24.9815309 C138.968539,26.8086 138.687456,28.6356416 138.125281,30.4627107 C137.563106,32.2897797 136.746207,33.9323605 135.674561,35.3905021 C134.602915,36.8486438 133.267769,38.0520318 131.669084,39.0007022 C130.070398,39.9493727 128.217005,40.4588363 126.108848,40.5291081 L122.261482,40.5291081 C121.804714,40.5291081 121.409441,40.3622149 121.07565,40.0284235 C120.741858,39.694632 120.574965,39.2993586 120.574965,38.8425913 C120.574965,38.385824 120.741858,37.9905506 121.07565,37.6567591 C121.409441,37.3229677 121.804714,37.1560744 122.261482,37.1560744 L126.108848,37.1560744 C127.549422,37.1560744 128.858216,36.7871526 130.03527,36.0492978 C131.212324,35.3114429 132.222468,34.3627867 133.06573,33.2033006 C133.908993,32.0438144 134.558998,30.743804 135.015765,29.3032303 C135.472533,27.8626567 135.700913,26.4221046 135.700913,24.9815309 C135.700913,23.4004134 135.384694,21.9159421 134.752247,20.5280723 C134.1198,19.1402026 133.258983,17.9280307 132.169768,16.8915204 C131.080554,15.85501 129.833247,15.0293277 128.427809,14.4144487 C127.022371,13.7995697 125.529116,13.4921348 123.947999,13.4921348 L122.735815,13.4394312 L122.366889,12.2799508 C121.48849,9.46907537 120.07429,7.28189569 118.124245,5.71834621 C116.1742,4.15479672 113.53026,3.37303371 110.192346,3.37303371 C108.084189,3.37303371 106.186876,3.73317173 104.500351,4.45345857 C102.813826,5.17374541 101.36449,6.17510478 100.1523,7.45756671 C98.9401098,8.74002865 98.0090213,10.2684193 97.3590063,12.0427844 C96.7089914,13.8171496 96.3839888,15.7232459 96.3839888,17.7611306 L96.4366924,17.7611306 L96.5420997,19.3422402 L95.0136938,19.6057584 C93.1514888,19.9219819 91.5703951,20.9233413 90.2703652,22.6098666 C88.9703353,24.2963919 88.3203301,26.1937043 88.3203301,28.301861 C88.3203301,30.6911051 89.1196608,32.7640947 90.7183462,34.5208919 C92.3170316,36.277689 94.2055603,37.1560744 96.3839888,37.1560744 L101.232725,37.1560744 C101.724628,37.1560744 102.128685,37.3229677 102.444909,37.6567591 C102.761132,37.9905506 102.919242,38.385824 102.919242,38.8425913 C102.919242,39.2993586 102.761132,39.694632 102.444909,40.0284235 C102.128685,40.3622149 101.724628,40.5291081 101.232725,40.5291081 L96.3839888,40.5291081 C94.8380073,40.5291081 93.3798875,40.2041055 92.0095857,39.5540906 C90.6392839,38.9040756 89.4358959,38.0169064 88.3993855,36.8925562 C87.3628752,35.768206 86.5371929,34.4681956 85.9223139,32.992486 C85.3074349,31.5167763 85,29.9532503 85,28.301861 C85,25.5963933 85.7554115,23.1544819 87.266257,20.9760534 C88.7771026,18.7976249 90.7095505,17.3395051 93.0636587,16.6016503 C93.2042025,14.2475421 93.7224499,12.0603624 94.6184164,10.0400456 C95.514383,8.0197289 96.7089871,6.26295807 98.2022647,4.76968048 C99.6955423,3.27640288 101.452313,2.10815028 103.47263,1.26488764 C105.492947,0.421624997 107.732829,0 110.192346,0 C112.089686,0 113.82889,0.237164061 115.410007,0.711499298 C116.991124,1.18583453 118.414109,1.8621913 119.679003,2.74058989 C120.943897,3.61898847 122.033095,4.69061868 122.946629,5.95551264 C123.860164,7.22040661 124.615575,8.62582326 125.212886,10.1718048 Z M113.249157,23.611236 L119.468188,30.4627107 C119.71414,30.7086623 119.837114,30.9985295 119.837114,31.3323209 C119.837114,31.6661124 119.71414,31.9735473 119.468188,32.2546348 L119.046559,32.5181531 C118.835743,32.7641047 118.563444,32.8607271 118.229652,32.8080232 C117.895861,32.7553193 117.605994,32.6059937 117.360042,32.3600421 L113.670787,28.2491573 L113.670787,45.2197331 C113.670787,45.7116364 113.503893,46.1156936 113.170102,46.4319171 C112.83631,46.7481406 112.441037,46.90625 111.98427,46.90625 C111.492366,46.90625 111.088309,46.7481406 110.772086,46.4319171 C110.455862,46.1156936 110.297753,45.7116364 110.297753,45.2197331 L110.297753,28.2491573 L106.713904,32.2546348 C106.467953,32.5005864 106.178086,32.649912 105.844294,32.7026159 C105.510503,32.7553198 105.220636,32.6586974 104.974684,32.4127458 L104.553055,32.1492275 C104.307103,31.86814 104.184129,31.5607051 104.184129,31.2269136 C104.184129,30.8931222 104.307103,30.603255 104.553055,30.3573034 L110.666678,23.611236 L110.666678,23.5585323 L111.088308,23.1369031 C111.193715,22.9963593 111.325473,22.8997369 111.483585,22.847033 C111.641697,22.7943291 111.791022,22.7679775 111.931566,22.7679775 C112.107246,22.7679775 112.265355,22.7943291 112.405899,22.847033 C112.546443,22.8997369 112.686984,22.9963593 112.827528,23.1369031 L113.249157,23.5585323 L113.249157,23.611236 Z">
                                </path>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </span>
                    </div>
                  </div>
                  <div class="jfUpload-button-container">
                    <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none" data-version="v2">
                      Pesquisar arquivos
                      <div class="jfUpload-heading forDesktop">
                        Drag and drop files here
                      </div>
                      <div class="jfUpload-heading forMobile">
                        Choose a file
                      </div>
                    </div>
                  </div>
                </div>
                <div class="jfUpload-files-container">
                  <input type="file" id="input_15" name="q15_imagemDo[]" multiple="" class="form-upload-multiple" data-imagevalidate="yes" data-file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" aria-label="Pesquisar arquivos" />
                </div>
              </div>
              <div data-wrapper-react="true">
              </div>
            </div>
            <span style="display:none" class="cancelText">
              Cancel
            </span>
            <span style="display:none" class="ofText">
              of
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
          <!---------------------------------------- Botao de registro de livros  ------------------------------------------------!-->
            <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Registrar
            </button>
        <!---------------------------------------- Botao de registro de livros  ------------------------------------------------!-->
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>





</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.21451"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.21451"></script>
