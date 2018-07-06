<!DOCTYPE html>
<html lang="pt_BR">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="UTF-8">
  <title>EquipeLiderEmpreendedor.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Multinível, Multinivel, MMN, Equipe Líder Empeendedor, Marketing Multinivel, Marketing Multinível, Marketing de Rede, SCI - Sistema de Consumo Inteligente"
  />
  <meta name="description" content="O Patrocinador dos Seus Sonhos - Philipe Barros" />
  <meta name="klickart:url" content="//art.klickpages.com.br" />
  <meta name="handler:contact" content="//handler.klickpages.com.br/sendmail" />
  <meta http-equiv="X-UA-Compatible" content="IE=9">
  <script type="text/javascript">window.NREUM || (NREUM = {}); NREUM.info = { "beacon": "bam.nr-data.net", "errorBeacon": "bam.nr-data.net", "licenseKey": "c8942a04dd", "applicationID": "13374999", "transactionName": "JwxXEkFdDw9cF01gXgoCTRRSHTMCXgARYFIWFVAFVghZIkkVTXRyMEMDCUNGCgxXBA5sRwUXUQ==", "queueTime": 0, "applicationTime": 5, "agent": "" }</script>
  <script type="text/javascript">window.NREUM || (NREUM = {}), __nr_require = function (e, t, n) { function r(n) { if (!t[n]) { var o = t[n] = { exports: {} }; e[n][0].call(o.exports, function (t) { var o = e[n][1][t]; return r(o || t) }, o, o.exports) } return t[n].exports } if ("function" == typeof __nr_require) return __nr_require; for (var o = 0; o < n.length; o++)r(n[o]); return r }({ 1: [function (e, t, n) { function r() { } function o(e, t, n) { return function () { return i(e, [f.now()].concat(u(arguments)), t ? null : this, n), t ? void 0 : this } } var i = e("handle"), a = e(2), u = e(3), c = e("ee").get("tracer"), f = e("loader"), s = NREUM; "undefined" == typeof window.newrelic && (newrelic = s); var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"], d = "api-", l = d + "ixn-"; a(p, function (e, t) { s[t] = o(d + t, !0, "api") }), s.addPageAction = o(d + "addPageAction", !0), s.setCurrentRouteName = o(d + "routeName", !0), t.exports = newrelic, s.interaction = function () { return (new r).get() }; var m = r.prototype = { createTracer: function (e, t) { var n = {}, r = this, o = "function" == typeof t; return i(l + "tracer", [f.now(), e, n], r), function () { if (c.emit((o ? "" : "no-") + "fn-start", [f.now(), r, o], n), o) try { return t.apply(this, arguments) } catch (e) { throw c.emit("fn-err", [arguments, this, e], n), e } finally { c.emit("fn-end", [f.now()], n) } } } }; a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function (e, t) { m[t] = o(l + t) }), newrelic.noticeError = function (e) { "string" == typeof e && (e = new Error(e)), i("err", [e, f.now()]) } }, {}], 2: [function (e, t, n) { function r(e, t) { var n = [], r = "", i = 0; for (r in e) o.call(e, r) && (n[i] = t(r, e[r]), i += 1); return n } var o = Object.prototype.hasOwnProperty; t.exports = r }, {}], 3: [function (e, t, n) { function r(e, t, n) { t || (t = 0), "undefined" == typeof n && (n = e ? e.length : 0); for (var r = -1, o = n - t || 0, i = Array(o < 0 ? 0 : o); ++r < o;)i[r] = e[t + r]; return i } t.exports = r }, {}], 4: [function (e, t, n) { t.exports = { exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart } }, {}], ee: [function (e, t, n) { function r() { } function o(e) { function t(e) { return e && e instanceof r ? e : e ? c(e, u, i) : i() } function n(n, r, o, i) { if (!d.aborted || i) { e && e(n, r, o); for (var a = t(o), u = m(n), c = u.length, f = 0; f < c; f++)u[f].apply(a, r); var p = s[y[n]]; return p && p.push([b, n, r, a]), a } } function l(e, t) { v[e] = m(e).concat(t) } function m(e) { return v[e] || [] } function w(e) { return p[e] = p[e] || o(n) } function g(e, t) { f(e, function (e, n) { t = t || "feature", y[n] = t, t in s || (s[t] = []) }) } var v = {}, y = {}, b = { on: l, emit: n, get: w, listeners: m, context: t, buffer: g, abort: a, aborted: !1 }; return b } function i() { return new r } function a() { (s.api || s.feature) && (d.aborted = !0, s = d.backlog = {}) } var u = "nr@context", c = e("gos"), f = e(2), s = {}, p = {}, d = t.exports = o(); d.backlog = s }, {}], gos: [function (e, t, n) { function r(e, t, n) { if (o.call(e, t)) return e[t]; var r = n(); if (Object.defineProperty && Object.keys) try { return Object.defineProperty(e, t, { value: r, writable: !0, enumerable: !1 }), r } catch (i) { } return e[t] = r, r } var o = Object.prototype.hasOwnProperty; t.exports = r }, {}], handle: [function (e, t, n) { function r(e, t, n, r) { o.buffer([e], r), o.emit(e, t, n) } var o = e("ee").get("handle"); t.exports = r, r.ee = o }, {}], id: [function (e, t, n) { function r(e) { var t = typeof e; return !e || "object" !== t && "function" !== t ? -1 : e === window ? 0 : a(e, i, function () { return o++ }) } var o = 1, i = "nr@id", a = e("gos"); t.exports = r }, {}], loader: [function (e, t, n) { function r() { if (!x++) { var e = h.info = NREUM.info, t = d.getElementsByTagName("script")[0]; if (setTimeout(s.abort, 3e4), !(e && e.licenseKey && e.applicationID && t)) return s.abort(); f(y, function (t, n) { e[t] || (e[t] = n) }), c("mark", ["onload", a() + h.offset], null, "api"); var n = d.createElement("script"); n.src = "https://" + e.agent, t.parentNode.insertBefore(n, t) } } function o() { "complete" === d.readyState && i() } function i() { c("mark", ["domContent", a() + h.offset], null, "api") } function a() { return E.exists && performance.now ? Math.round(performance.now()) : (u = Math.max((new Date).getTime(), u)) - h.offset } var u = (new Date).getTime(), c = e("handle"), f = e(2), s = e("ee"), p = window, d = p.document, l = "addEventListener", m = "attachEvent", w = p.XMLHttpRequest, g = w && w.prototype; NREUM.o = { ST: setTimeout, SI: p.setImmediate, CT: clearTimeout, XHR: w, REQ: p.Request, EV: p.Event, PR: p.Promise, MO: p.MutationObserver }; var v = "" + location, y = { beacon: "bam.nr-data.net", errorBeacon: "bam.nr-data.net", agent: "js-agent.newrelic.com/nr-1071.min.js" }, b = w && g && g[l] && !/CriOS/.test(navigator.userAgent), h = t.exports = { offset: u, now: a, origin: v, features: {}, xhrWrappable: b }; e(1), d[l] ? (d[l]("DOMContentLoaded", i, !1), p[l]("load", r, !1)) : (d[m]("onreadystatechange", o), p[m]("onload", r)), c("mark", ["firstbyte", u], null, "api"); var x = 0, E = e(4) }, {}] }, {}, ["loader"]);</script>
  <meta property="og:url" content="www.philipebarros.com" />
  <meta property="fb:app_id" content="" />
  <link rel="shortcut icon" href="../static-public.klickpages.com.br/uploads/media/file/46194/favicon.png" />
  <meta property="og:image" content="https://static-public.klickpages.com.br/uploads/media/file/46194/favicon.png" />
  <link rel="stylesheet" media="screen" href="../static-public.klickpages.com.br/app/assets/stylesheets/publish20a3.css?v=1529416282"
  />
  <link href="../fonts.googleapis.com/csse5a6.css?family=Dosis:300,500,700|Just+Another+Hand|Lato:%27100italic%27,%27300italic%27,%27400italic%27,%27700italic%27,%27900italic%27,100,300,400,700,900|Lora:%27400italic%27,%27700italic%27,400,700|Montserrat:300,400,500,700|Oswald:300,400,700|Open+Sans:%27300italic%27,%27400italic%27,%27600italic%27,%27700italic%27,300,400,600,700|Open+Sans+Condensed:%27300italic%27,300,700|Roboto:%27100italic%27,%27300italic%27,%27400italic%27,%27500italic%27,%27700italic%27,%27900italic%27,100,300,400,500,700,900"
    rel="stylesheet">
  <script type="text/javascript" src="../static-public.klickpages.com.br/app/assets/javascripts/public/js/include20a3.js?v=1529416282">
//<![CDATA[

//]]>
  </script>
  <script type="text/javascript" src="../js/jquery.mask.js" async></script>
  <script type="text/javascript" src="../apis.google.com/js/plus.js" async></script>
  <script type="text/javascript" src="../apis.google.com/js/plusone.js" async></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script>
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-64501281-1', 'auto');
    ga('send', 'pageview');

  </script>
  <style type="text/css"></style>
</head>

<body>
  <script>
    function submeter(frm){
      if (grecaptcha.getResponse() == "")
        {
      alert("Você não clicou no reCAPTCHA (Não Sou Robô), Por Favor, Faça!")
      return false;
      }
    }
  </script>
  <script>
      window.onload = function() {
      var recaptcha = document.forms["formulario"]["g-recaptcha-response"];
      recaptcha.required = true;
      recaptcha.oninvalid = function(e) {
      // fazer algo, no caso to dando um alert
      alert("Por favor complete o reCAPTCHA! (Não Sou Robô!)");
          }
      }
  </script>
  <script>
    /* Máscaras ER */
    $(document).ready(function () {
      $('#fone').mask('(00) 00000-0000');
    });
  </script>
  <script>
    var funnel_key = 'BFJ8M';
    var funnel_level = '0';
    var field_email = 'EMAIL';
    var edz_loadscript = document.createElement('script');
    edz_loadscript.src = '../eduzz.com/dev/js/eac619.js?v=1.0';
    document.getElementsByTagName('head')[0].appendChild(edz_loadscript);
  </script>
  <div id="fb-root"></div>
  <script>
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "../connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <script type="text/javascript" src="../static-public.klickpages.com.br/app/assets/javascripts/public/js/body/begin20a3.js?v=1529416282">
//<![CDATA[

//]]>
  </script>
  <div klickart-sections>
    <div id="section-620866" klickart-edit-component-info="">
      <link rel="stylesheet" href="../static-public.klickpages.com.br/tmp/zip/651/styles/main.css">
      <section class="into template-kp" style='background-attachment: scroll; background-image: url("../static-public.klickpages.com.br/uploads/media/file/172292/bg-editado.jpg");'>
        <div class="component-bg" style="background-color: rgba(0, 0, 0, 0);" klickart-edit-background-mask-visible="true"></div>
        <div class="container">
          <header class="header"></header>
          <div class="row">
            <div class="col-txt col-sm-4">
              <div class="text Medium Medium-rich">
                <div>
                  <span style="font-size: 17px;">ENTRE AGORA MESMO PARA A SCI E CONQUISTE SUA TÃO ESPERADA LIBERDADE FINANCEIRA!</span>
                  <br> </div>
                <div>
                  <font class="klickart-fontSize" style="font-size: 17px;">
                    <br>
                  </font>
                </div>
              </div>
              <h1 class="title">
                <div>
                  <span style="font-family: inherit; font-size: 23px;">
                    <font class="klickart-fontSize" style="font-size: 45px;">
                      <b class="medium-b">INDIQUE E GANHE</b>
                    </font>
                  </span>
                </div>
                <div>
                  <span style="font-size: 29px;">
                    <b>INDIQUE 6 CONSUMIDORES E TENHA SUA COMPRA A CUSTO R$ 0,00</b>
                  </span>
                </div>
              </h1>
              <div class="description">
                <div>
                  <br>
                </div>
                <div>DIGITE SEU E-MAIL ABAIXO PARA SE INSCREVER:
                  <br> </div>
              </div>
              <div class="cta-wrapper">
                <a href="#section-620840" class="general-button success modal-trigger" klickart-edit-not-highlight="" klickart-edit-link-type="popup"
                  id="klickart-linkqgsouit8uhg00" style="background-attachment: scroll; background-color: rgb(255, 0, 0);"
                  klickart-edit-link-href-klickbox="#">
                  <span>
                    <b class="medium-b">
                      <font class="klickart-font" style="color: rgb(255, 255, 255);">QUERO ME INSCREVER &gt;&gt;</font>
                    </b>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="webnar" style="background-color: rgb(255, 0, 0); background-attachment: scroll;">
          <div class="container">
          </div>
        </div>
    </div>
    </section>
  </div>
  <div id="section-623032" klickart-edit-component-info="">
    <link rel="stylesheet" href="../static-public.klickpages.com.br/tmp/zip/652/styles/main.css">
    <section class="quality-4 template-kp" style="background-attachment: scroll;">
      <div class="component-bg" style="background-color: rgba(255, 255, 255, 1.0);" klickart-edit-background-mask-visible="true"></div>
      <div class="container">
        <hgroup>
          <h2 class="quality-4-title Medium Medium-rich">
            <b class="medium-b">INDIQUE 30 CONSUMIDORES</b>
            <div>
              <b class="medium-b">E TENHA SUA COMPRA A CUSTO R$ 0,00
                <font class="klickart-fontSize" style="font-size: 27px;">+ UMA RENDA DE R$ 1.500,00 POR MÊS</font>
              </b>
            </div>
            <div>
              <b class="medium-b">
                <font class="klickart-fontSize" style="font-size: 27px;">
                  <br>
                </font>
              </b>
            </div>
          </h2>
        </hgroup>
        <div class="quality-4-list clearfix" id="klickart-collection-187be69j7koo00">
          <div class="quality-4-item col-sm-4" style="background-attachment: scroll;">
            <h4 class="title">
              <b class="medium-b">ALIMENTAÇÃO Á CUSTO ZERO</b>
            </h4>
          </div>
          <div class="quality-4-item col-sm-4" style="background-attachment: scroll;">
            <h4 class="title">
              <b class="medium-b">
                <font class="klickart-fontSize" style="font-size: 20px;">RENDA DE R$1.500,00 POR MÊS</font>
              </b>
            </h4>
          </div>
          <div class="quality-4-item col-sm-4" style="background-attachment: scroll;">
            <h4 class="title">
            <b class="medium-b">
                <font class="klickart-fontSize" style="font-size: 42px;">INSS PAGO</font>
              </b>
            </h4>
          </div>
          <div class="quality-4-item col-sm-4" style="background-attachment: scroll;">
            <h4 class="title">
            <b class="medium-b">
                <font class="klickart-fontSize" style="font-size: 23px;">8 KITS A SUA ESCOLHA</font>
              </b>
            </h4>
          </div>
          <div class="quality-4-item col-sm-4" style="background-attachment: scroll;">
            <h4 class="title">
              <b class="medium-b">
                <font class="klickart-fontSize" style="font-size: 23px;">NOTA FISCAL DOS PRODUTOS</font>
              </b>
            </h4>
          </div>
          <div class="quality-4-item col-sm-4" style="background-attachment: scroll;">
            <h4 class="title">
            <b class="medium-b">
                <font class="klickart-fontSize" style="font-size: 23px;">SUPORTE E TREINAMENTO</font>
              </b>
            </h4>
          </div>
        </div>
        <div class="cta-wrapper">
          <a href="#section-620840" class="general-button success modal-trigger" klickart-edit-not-highlight="" klickart-edit-link-type="popup"
            id="klickart-link1k9n6bl2qss800" style="background-attachment: scroll; background-color: rgb(255, 0, 0);" klickart-edit-link-href-klickbox="#">
            <span style="font-family: Lato, sans-serif;">
              <b class="medium-b">QUERO ME INSCREVER &gt;&gt;</b>
            </span>
          </a>
        </div>
      </div>
    </section>
  </div>
  </div>
  <div klickart-popups style="display: none;">
    <div id="section-620840" klickart-edit-component-info="">
      <link rel="stylesheet" href="../static-public.klickpages.com.br/tmp/zip/105/styles/main.css">
      <link rel="stylesheet" href="../static-public.klickpages.com.br/tmp/zip/105/styles/recaptcha.css">
      <div class="popup-tpl1" style="background-attachment: scroll;">
        <div class="component-bg" style="background-color: rgba(255, 255, 255, 1);" klickart-edit-background-mask-visible="true"
          id="klickart-popup-1cghmi9sf"></div>
        <div>
          <header style="background-attachment: scroll;">
            <div class="Medium Medium-rich">
              <p>Em qual e-mail você quer ser contatado?</p>
            </div>
          </header>
        </div>
        <form id="formulario" action="recaptcha.php" name="formulario" method="post" onsubmit="submeter(this); return false;">
          <div>
            <div style="">
              <label>Insira seu melhor e-mail abaixo para ter
                <b class="medium-b">acesso instantâneo</b>!</label>
              <div>
                <input id="inputEmail" type="email" class="general-input" placeholder="Insira seu melhor e-mail" name="email" required="" data-klickart-form-autofill-options='{"parameter":"EMAIL"}'>
              </div>
              <div>
                <div>
                  <input id="inputNome" type="text" class="general-input" placeholder="Seu Nome" name="name" required="" klickart-edit-not-highlight=""
                    data-klickart-form-autofill-options='{"parameter":"field8064"}' style=""> </div>
              </div>
              <div>
                <div>
                  <input id="inputFone" type="text" class="general-input" placeholder="Telefone / WhatsApp" name="fone" data-mask="(00) 00000-0000" data-mask-selectonfocus="true" required=""
                    klickart-edit-not-highlight="" data-klickart-form-autofill-options='{"parameter":"field8478"}' style=""
                    maxlength="15">
                </div>
              </div>
            </div>
          </div>
          <div class="g-recaptcha-outer">
            <div class="g-recaptcha-inner">
              <div class="g-recaptcha" data-sitekey="6Lf8RWEUAAAAAIO4ipZE0iKl6pYJVj1A7Z1T53hi" required=""></div>
            </div>
          </div>
          </br>
          <button type="submit" formmethod="POST" class="general-button klickpages-handle-submit" style="background-attachment: scroll;">
            <span class="Medium Medium-rich">QUERO ABRAÇAR ESSA OPORTUNIDADE</span>
          </button>
          <span class="txt-info">
          <i class="ico-lock"></i>Seu e-mail não será utilizado sem sua autorização.</span>
        </form>
        <div>
          <footer style="background-attachment: scroll;">
            <p></p>
          </footer>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../static-public.klickpages.com.br/app/assets/javascripts/public/js/body/end20a3.js?v=1529416282">
//<![CDATA[

//]]>
  </script>
  <script type="text/javascript" src="../static-public.klickpages.com.br/app/assets/javascripts/libs/libs20a3.js?v=1529416282">
//<![CDATA[

//]]>
  </script>
</body>

</html>