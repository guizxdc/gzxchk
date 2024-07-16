
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Multigate | Headers Center</title>
    <link rel="icon" href="../../assets/images/logoh.png">

    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/all.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800"
      rel="stylesheet"
    />
    <link href="assets/nucleo-icons.html" rel="stylesheet" />
    <link href="assets/stylee209e209.css" rel="stylesheet" />
    <link href="assets/demo.css" rel="stylesheet" />
    <script src="assets/inspect.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="assets/jquery.min.js" type="text/javascript"></script>
    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      body {
        font-family: verdana;
        background-color: #1a1f26;
      }

      header {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
      }

      .text {
        position: absolute;
        color: #fff;
        line-height: 1.5;
        text-align: center;
      }

      .overlay {
        position: absolute;
        height: 100vh;
        width: 100vw;
        background-color: #18266c;
        opacity: 0.7;
      }

      .button {
        background: #fff;
        border-radius: 40px;
        color: #18266c;
        font-size: 1.5em;
        padding: 0.7em 1.2em;
        text-decoration: none;
        box-sizing: border-box;
        cursor: pointer;
      }

      h1 {
        font-size: 2.5em;
      }

      p {
        font-size: 1.5em;
        margin-bottom: 1em;
      }
    </style>
    <style>
      * {
        box-sizing: border-box;
      }
      .video-background {
        background: #000;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 7;
      }
      video#bgvid {
        position: fixed;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -5;
        -ms-transform: translateX(-50%) translateY(-50%);
        -moz-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        background: no-repeat;
        background-size: cover;
      }
      iframe {
        position: fixed;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 200%;
        width: auto;
        height: auto;
        z-index: -5;
        -webkit-transform: scale(0.5);
        -moz-transform: scale(0.5);
        transform: translateX(-50%) translateY(-50%);
        background: no-repeat;
        background-size: cover;
      }
      :root {
        /* Colors */
        --blue: #ffffff;
        --green: #d41eaa;
        --yellow: #ffffff;
        --red: #d41eaa;
        /--black: #000000;
      }

      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      .rainbow {
        background-repeat: no-repeat;
      }

      /* Setup */
      .rainbow:before,
      .rainbow:after {
        content: "";
        display: block;
        position: fixed;
        right: ;
        top: 0;
        left: 0;
        z-index: 0;
        opacity: 1;
        color: #fff;
        height: 100%;
        pointer-events: none;
      }

      /* Rainbow Gradient */
      .rainbow:before {
        height: 2px;
        width: 300vw;
        left: -100vw;
        animation: RainbowBefore 2s linear infinite;
        background-image: linear-gradient(
          to right,
          var(--blue),
          var(--green),
          var(--yellow),
          var(--red),
          var(--yellow),
          var(--green),
          var(--blue),
          var(--green),
          var(--green),
          var(--yellow),
          var(--red)
        );
      }

      /* Hex Background */
      .rainbow:after {
        background-size: contain;
        background-repeat: no-repeat;
        background-position: top center;
        height: 100%;
        width: 100%;
        top: 1px;
      }

      /* Animations
      ********************************************/
      /* Rainbow */
      @keyframes RainbowBefore {
        0% {
          transform: translateX(-100vw);
        }
        100% {
          transform: translateX(100vw);
        }
      }

      /* Fade In */
      @keyframes FadeIn {
        0% {
          opacity: 0;
        }
        100% {
          opacity: 1;
        }
      }

      /* Power On */
      @keyframes Power {
        0% {
          background-position: 175% 50%;
        }
        100% {
          background-position: -100% 50%;
        }
      }

      /* Mobile */
      @media (min-width: 0) and (max-width: 768px) {
        .rainbow {
          margin: 25vh auto -100px;
        }
      }

      /* Tablet */
      @media (min-width: 769px) and (max-width: 1024px) {
      }

      /* Desktop */
      @media (min-width: 1025px) {
      }
    </style>
  </head>
  <body
    style="
      background-repeat: no-repeat;
      background-size: cover;
    "
  >
    <script src="assets/inspect.js" type="text/javascript"></script>
    
    <div class="col-md-11 mt-4" style="margin: auto">
      <div class="row" style="justify-content: center;">
        <div style="width: 60%">
          <div class="col-md-8" style="max-width: 100%">
            <div class="card">
              <div
                style="
                  -webkit-border-radius: 10px;
                  -moz-border-radius: 16px;
                  border-radius: 16px;
                  background: linear-gradient(to bottom, #111520, #090b12);

                "
                class="card-body text-center"
              >
                <h5
                  style="
                    font-family: 'Trebuchet MS', sans-serif;
                    font-size: 20px;
                    display: flex;
                    justify-content: center;
                  "
                >
                  Insira sua lista aqui!
                  <div class="noDisplay" style="margin-left: 15px;">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                  </div>
                </h5>
                <textarea
                  style="border-color: 3d0430; height: 8.06rem"
                  class="form-control text-center form-checker mb-2"
                  placeholder="4066557303545026|06|2024|430
                  Máximo 50 GG's"
                ></textarea>
                <style>.cookie2{
                transition: 0.3s !important;
              }
              
              .cookie2:focus{
                border: 1px solid #3d0430 !important;
              }
              
              </style>
                <input type="text" class="cookie2" placeholder="Insira seu Cookie Amazon (US)" style="outline: none; color: white; padding-left: 10px; width: 20em; background: linear-gradient(to bottom, #111520, #090b12); border: 1px solid #111520; border-radius: 12px;" name="" id="">
              </div>
            
            </div>
            
          </div>
          <div class="col-md-4" style="max-width: 100%">
            <div
              class="card"
              style="
                 background: linear-gradient(to bottom, #111520, #090b12);
                border: 0;
                position: relative;
                display: flex;
                width: 100%;
                margin-bottom: 30px;
                box-shadow: 0 1px 20px 0 rgba(0, 0, 0, 0.1);
                flex-direction: row;
                padding: 10px;
              "
            >
              <button
                class="btn btn-success btn-play text-white"
                style="
                  width: 49%;
                  float: left;
                  margin: 5px;
                  background: #2cff66;
                "
              >
                <i class="fa fa-play"></i> Start
              </button>
              <button
                class="btn btn-danger btn-stop text-white"
                style="
                  width: 49%;
                  float: right;
                  margin: 5px;
                  background: #CB2020;
                "
                disabled=""
              >
                <i class="fa fa-stop"></i> STOP
              </button>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="card">
              <div style="background: linear-gradient(to bottom, #111520, #090b12); border-radius: 12px;" class="card-body">
                <div class="float-right">
                  <button type="show" class="btn btn-primary btn-sm show-lives">
                    <i class="fa fa-eye-slash"></i>
                  </button>
                  <button class="btn btn-success btn-sm btn-copy">
                    <i class="fa fa-copy"></i>
                  </button>
                </div>
                <h4 class="title mb-1">
                  <i class="fa fa-check text-success"></i> APROVADAS
                </h4>
                <div id="lista_aprovadas"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="card">
              <div
                style="background: linear-gradient(to bottom, #111520, #090b12); border-radius: 12px;"
                class="card-body"
              >
                <div class="float-right">
                  <button
                    type="hidden"
                    class="btn btn-primary btn-sm show-dies"
                  >
                    <i class="fa fa-eye"></i>
                  </button>
                  <button class="btn btn-danger btn-sm btn-trash">
                    <i class="fa fa-trash"></i>
                  </button>
                </div>
                <h4 class="title mb-1">
                  <i class="fa fa-times text-danger"></i> REPROVADAS
                </h4>
                <div style="display: none" id="lista_reprovadas"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div
              style="
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                border-radius: 12px;
                background: linear-gradient(to bottom, #111520, #090b12);
              "
              class="card-body"
            >
              <h5 class="title">
                <i class="fa fa-check"></i> Aprovadas:<span
                  class="badge badge-success float-right aprovadas"
                  >0</span
                >
              </h5>
              <hr />
              <h5 class="title">
                <i class="fa fa-times"></i> Reprovadas:<span
                  class="badge badge-danger float-right reprovadas"
                  >0</span
                >
              </h5>
              <hr />
              <h5 class="title">
                <i class="fa fa-sync-alt"></i> Testadas:<span
                  class="badge badge-info float-right testadas"
                  >0</span
                >
              </h5>
              <hr />
              <h5 class="title mb-0">
                <i class="fa fa-share-square"></i> Carregadas:<span
                  class="badge badge-primary float-right carregadas"
                  >0</span
                >
              </h5>
              <hr />
              <h5 class="title mb-0">
              <i class="fa fa-credit-card" aria-hidden="true"></i> Saldo:<span
                  class="badge float-right"style="background-color: #2cff66; color: #000;">
                  <?php echo $saldo ?></span>
              </h5>
            </div>

                      </path>
                    </svg>
                    <svg
                      version="1.1"
                      class="chip"
                      id="Layer_1"
                      x="0px"
                      y="0px"
                      width="30px"
                      height="30px"
                      viewBox="0 0 50 50"
                      xml:space="preserve"
                    >
                      <image
                        id="image0"
                        width="50"
                        height="50"
                        x="0"
                        y="0"
                      ></image>
                    </svg>
                    <svg
                      version="1.1"
                      class="contactless"
                      x="0px"
                      y="0px"
                      width="20px"
                      height="20px"
                      viewBox="0 0 50 50"
                      xml:space="preserve"
                    >
                    </svg>
                  </div>
                  <div class="flip-card-back">
                    <div class="strip"></div>
                    <div class="mstrip"></div>
                    <div class="sstrip">
                      <p class="code">430</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>

      var live = new Audio("audio.html");
      var iniciar = new Audio("audio.html");
      var parar = new Audio("audio.html");

      $(document).ready(function () {
        $(".show-lives").click(function () {
          var type = $(".show-lives").attr("type");
          $("#lista_aprovadas").slideToggle();
          if (type == "show") {
            $(".show-lives").html('<i class="fa fa-eye"></i>');
            $(".show-lives").attr("type", "hidden");
          } else {
            $(".show-lives").html('<i class="fa fa-eye-slash"></i>');
            $(".show-lives").attr("type", "show");
          }
        });

        $(".show-dies").click(function () {
          var type = $(".show-dies").attr("type");
          $("#lista_reprovadas").slideToggle();
          if (type == "show") {
            $(".show-dies").html('<i class="fa fa-eye"></i>');
            $(".show-dies").attr("type", "hidden");
          } else {
            $(".show-dies").html('<i class="fa fa-eye-slash"></i>');
            $(".show-dies").attr("type", "show");
          }
        });

        $(".btn-trash").click(function () {
          Swal.fire({
            title: "Lista de Reprovadas Limpa!",
            icon: "success",
            showConfirmButton: false,
            toast: true,
            position: "top-end",
            timer: 3000,
          });
          $("#lista_reprovadas").text("");
        });

        $(".btn-copy").click(function () {
          Swal.fire({
            title: "Lista de Aprovadas Copiada!",
            icon: "success",
            showConfirmButton: false,
            toast: true,
            position: "top-end",
            timer: 3000,
          });
          var lista_lives =
            document.getElementById("lista_aprovadas").innerText;
          var textarea = document.createElement("textarea");
          textarea.value = lista_lives;
          document.body.appendChild(textarea);
          textarea.select();
          document.execCommand("copy");
          document.body.removeChild(textarea);
        });

        $(".btn-play").click(function () {
          var lista = $(".form-checker").val().trim();
          var array = lista.split("\n");
          var lives = 0,
            dies = 0,
            testadas = 0,
            txt = "";

          if (!lista) {
            Swal.fire({
              title: "Erro: Lista Vazia!",
              icon: "error",
              showConfirmButton: false,
              toast: true,
              position: "top-end",
              timer: 3000,
            });
            return false;
          }
          iniciar.play();
          Swal.fire({
            title: "Teste Iniciado!",
            icon: "success",
            showConfirmButton: false,
            toast: true,
            position: "top-end",
            timer: 3000,
          });

          $(".noDisplay").addClass('loader')
          $(".noDisplay").removeClass('noDisplay')

          var line = array.filter(function (value) {
            if (value.trim() !== "") {
              txt += value.trim() + "\n";
              return value.trim();
            }
          });

          var total = line.length;

          $(".form-checker").val(txt.trim());

          if (total > 10000) {
            limite.play();
            Swal.fire({
              title: "Limite atingido!",
              icon: "success",
              showConfirmButton: false,
              toast: true,
              position: "top-end",
              timer: 3000,
            });
            return false;
          }

          var cookie = $(".cookie2").val().trim();
          $(".carregadas").text(total);
          $(".btn-play").attr("disabled", true);
          $(".btn-stop").attr("disabled", false);
          line.forEach(function (data) {
            var callBack = $.ajax({
              type: "POST",
              url: "api.php?lista=" + data + "&cookie=" + cookie,
              success: function (retorno) {
                if (retorno.indexOf("Aprovada") >= 0) {
                  live.play();
                  Swal.fire({
                    title: "+1 Aprovada!",
                    icon: "success",
                    showConfirmButton: false,
                    toast: true,
                    position: "top-end",
                    timer: 3000,
                  });
                  $("#lista_aprovadas").append(retorno);
                  removelinha();
                  lives = lives + 1;
                } else {
                  $("#lista_reprovadas").append(retorno);
                  removelinha();
                  dies = dies + 1;
                }
                testadas = lives + dies;
                $(".aprovadas").text(lives);
                $(".reprovadas").text(dies);
                $(".testadas").text(testadas);

                if (testadas == total) {
                  parar.play();
                  Swal.fire({
                    title: "Teste Finalizado!",
                    icon: "success",
                    showConfirmButton: false,
                    toast: true,
                    position: "top-end",
                    timer: 3000,
                  });
                  $(".btn-play").attr("disabled", false);
                  $(".btn-stop").attr("disabled", true);
                  $(".loader").addClass('noDisplay')
                  $(".noDisplay").removeClass('loader')
                }
              },
            });
            $(".btn-stop").click(function () {
              Swal.fire({
                title: "Teste Parado!",
                icon: "warning",
                showConfirmButton: false,
                toast: true,
                position: "top-end",
                timer: 3000,
              });
              $(".btn-play").attr("disabled", false);
              $(".btn-stop").attr("disabled", true);
              $(".loader").addClass('noDisplay')
              $(".noDisplay").removeClass('loader')
              callBack.abort();
              return false;
            });
          });
        });
      });

      function removelinha() {
        var lines = $(".form-checker").val().split("\n");
        lines.splice(0, 1);
        $(".form-checker").val(lines.join("\n"));
      }
    </script>

    <script src="cdn.jsdelivr.net/npm/baffle%400.3.6/dist/baffle.min.html"></script>
    <script>
      const text = baffle(".data");
      text.set({
        characters: "ᛃᚠᚪᚻxx᛭ᛜ*",
        //characters: '𓀞𓀟𓀠𓀡𓀢𓀣𓀤',
        speed: 150,
      });
      text.start();
      text.reveal(6000);
    </script>

    <script>
      TypingText = function (element, interval, cursor, finishedCallback) {
        if (
          typeof document.getElementById == "undefined" ||
          typeof element.innerHTML == "undefined"
        ) {
          this.running = true;
          return;
        }
        this.element = element;
        this.finishedCallback = finishedCallback
          ? finishedCallback
          : function () {
              return;
            };
        this.interval = typeof interval == "undefined" ? 100 : interval;
        this.origText = this.element.innerHTML;
        this.unparsedOrigText = this.origText;
        this.cursor = cursor ? cursor : "";
        this.currentText = "";
        this.currentChar = 0;
        this.element.typingText = this;
        if (this.element.id == "")
          this.element.id = "typingtext" + TypingText.currentIndex++;
        TypingText.all.push(this);
        this.running = false;
        this.inTag = false;
        this.tagBuffer = "";
        this.inHTMLEntity = false;
        this.HTMLEntityBuffer = "";
      };
      TypingText.all = new Array();
      TypingText.currentIndex = 0;
      TypingText.runAll = function () {
        for (var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
      };
      TypingText.prototype.run = function () {
        if (this.running) return;
        if (typeof this.origText == "undefined") {
          setTimeout(
            "document.getElementById('" +
              this.element.id +
              "').typingText.run()",
            this.interval
          );
          return;
        }
        if (this.currentText == "") this.element.innerHTML = "";
        if (this.currentChar < this.origText.length) {
          if (this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
            this.tagBuffer = "<";
            this.inTag = true;
            this.currentChar++;
            this.run();
            return;
          } else if (
            this.origText.charAt(this.currentChar) == ">" &&
            this.inTag
          ) {
            this.tagBuffer += ">";
            this.inTag = false;
            this.currentText += this.tagBuffer;
            this.currentChar++;
            this.run();
            return;
          } else if (this.inTag) {
            this.tagBuffer += this.origText.charAt(this.currentChar);
            this.currentChar++;
            this.run();
            return;
          } else if (
            this.origText.charAt(this.currentChar) == "&" &&
            !this.inHTMLEntity
          ) {
            this.HTMLEntityBuffer = "&";
            this.inHTMLEntity = true;
            this.currentChar++;
            this.run();
            return;
          } else if (
            this.origText.charAt(this.currentChar) == ";" &&
            this.inHTMLEntity
          ) {
            this.HTMLEntityBuffer += ";";
            this.inHTMLEntity = false;
            this.currentText += this.HTMLEntityBuffer;
            this.currentChar++;
            this.run();
            return;
          } else if (this.inHTMLEntity) {
            this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
            this.currentChar++;
            this.run();
            return;
          } else {
            this.currentText += this.origText.charAt(this.currentChar);
          }
          this.element.innerHTML = this.currentText;
          this.element.innerHTML +=
            this.currentChar < this.origText.length - 1
              ? typeof this.cursor == "function"
                ? this.cursor(this.currentText)
                : this.cursor
              : "";
          this.currentChar++;
          setTimeout(
            "document.getElementById('" +
              this.element.id +
              "').typingText.run()",
            this.interval
          );
        } else {
          this.currentText = "";
          this.currentChar = 0;
          this.running = false;
          this.finishedCallback();
        }
      };
    </script>


    <embed
      src="musica/12.html"
      autostart="true"
      loop="true"
      width="0"
      height="0"
    />

    <script type="text/javascript">
      var message = "Desculpe, o clique com o botÃ£o direito foi desativado.";
      function clickIE() {
        if (document.all) {
          message;
          return false;
        }
      }
      function clickNS(e) {
        if (document.layers || (document.getElementById && !document.all)) {
          if (e.which == 2 || e.which == 3) {
            message;
            return false;
          }
        }
      }
      if (document.layers) {
        document.captureEvents(Event.MOUSEDOWN);
        document.onmousedown = clickNS;
      } else {
        document.onmouseup = clickNS;
        document.oncontextmenu = clickIE;
      }
      document.oncontextmenu = new Function("return false");
    </script>

    <script type="text/javascript">
      //<![CDATA[
      (shortcut = {
        all_shortcuts: {},
        add: function (a, b, c) {
          var d = {
            type: "keydown",
            propagate: !1,
            disable_in_input: !1,
            target: document,
            keycode: !1,
          };
          if (c) for (var e in d) "undefined" == typeof c[e] && (c[e] = d[e]);
          else c = d;
          (d = c.target),
            "string" == typeof c.target &&
              (d = document.getElementById(c.target)),
            (a = a.toLowerCase()),
            (e = function (d) {
              d = d || window.event;
              if (c.disable_in_input) {
                var e;
                d.target ? (e = d.target) : d.srcElement && (e = d.srcElement),
                  3 == e.nodeType && (e = e.parentNode);
                if ("INPUT" == e.tagName || "TEXTAREA" == e.tagName) return;
              }
              d.keyCode ? (code = d.keyCode) : d.which && (code = d.which),
                (e = String.fromCharCode(code).toLowerCase()),
                188 == code && (e = ","),
                190 == code && (e = ".");
              var f = a.split("+"),
                g = 0,
                h = {
                  "`": "~",
                  1: "!",
                  2: "@",
                  3: "#",
                  4: "$",
                  5: "%",
                  6: "^",
                  7: "&",
                  8: "*",
                  9: "(",
                  0: ")",
                  "-": "_",
                  "=": "+",
                  ";": ":",
                  "'": '"',
                  ",": "<",
                  ".": ">",
                  "/": "?",
                  "\\": "|",
                },
                i = {
                  esc: 27,
                  escape: 27,
                  tab: 9,
                  space: 32,
                  return: 13,
                  enter: 13,
                  backspace: 8,
                  scrolllock: 145,
                  scroll_lock: 145,
                  scroll: 145,
                  capslock: 20,
                  caps_lock: 20,
                  caps: 20,
                  numlock: 144,
                  num_lock: 144,
                  num: 144,
                  pause: 19,
                  break: 19,
                  insert: 45,
                  home: 36,
                  delete: 46,
                  end: 35,
                  pageup: 33,
                  page_up: 33,
                  pu: 33,
                  pagedown: 34,
                  page_down: 34,
                  pd: 34,
                  left: 37,
                  up: 38,
                  right: 39,
                  down: 40,
                  f1: 112,
                  f2: 113,
                  f3: 114,
                  f4: 115,
                  f5: 116,
                  f6: 117,
                  f7: 118,
                  f8: 119,
                  f9: 120,
                  f10: 121,
                  f11: 122,
                  f12: 123,
                },
                j = !1,
                l = !1,
                m = !1,
                n = !1,
                o = !1,
                p = !1,
                q = !1,
                r = !1;
              d.ctrlKey && (n = !0),
                d.shiftKey && (l = !0),
                d.altKey && (p = !0),
                d.metaKey && (r = !0);
              for (var s = 0; (k = f[s]), s < f.length; s++)
                "ctrl" == k || "control" == k
                  ? (g++, (m = !0))
                  : "shift" == k
                  ? (g++, (j = !0))
                  : "alt" == k
                  ? (g++, (o = !0))
                  : "meta" == k
                  ? (g++, (q = !0))
                  : 1 < k.length
                  ? i[k] == code && g++
                  : c.keycode
                  ? c.keycode == code && g++
                  : e == k
                  ? g++
                  : h[e] && d.shiftKey && ((e = h[e]), e == k && g++);
              if (
                g == f.length &&
                n == m &&
                l == j &&
                p == o &&
                r == q &&
                (b(d), !c.propagate)
              )
                return (
                  (d.cancelBubble = !0),
                  (d.returnValue = !1),
                  d.stopPropagation &&
                    (d.stopPropagation(), d.preventDefault()),
                  !1
                );
            }),
            (this.all_shortcuts[a] = { callback: e, target: d, event: c.type }),
            d.addEventListener
              ? d.addEventListener(c.type, e, !1)
              : d.attachEvent
              ? d.attachEvent("on" + c.type, e)
              : (d["on" + c.type] = e);
        },
        remove: function (a) {
          var a = a.toLowerCase(),
            b = this.all_shortcuts[a];
          delete this.all_shortcuts[a];
          if (b) {
            var a = b.event,
              c = b.target,
              b = b.callback;
            c.detachEvent
              ? c.detachEvent("on" + a, b)
              : c.removeEventListener
              ? c.removeEventListener(a, b, !1)
              : (c["on" + a] = !1);
          }
        },
      }),
        shortcut.add("esc", function () {
          top.location.href = "";
        });
      shortcut.add("Ctrl+U", function () {
        top.location.href = "";
      });
      //]]>
    </script>
  </body>
</html>
