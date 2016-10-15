@extends('frontend.dasdboard._layout.layout')
@section('title')
@endsection
@section('head')
    <meta charset="utf-8" content="text/html">
@endsection
@section('content')
    <div id="content">
        <script type="text/javascript">
            //<![CDATA[
            function openpopup(url, name, options, fullscreen) {
                fullurl = "http://24hguide.com" + url;
                windowobj = window.open(fullurl, name, options);
                if (fullscreen) {
                    windowobj.moveTo(0, 0);
                    windowobj.resizeTo(screen.availWidth, screen.availHeight);
                }
                windowobj.focus();
                return false;
            }

            function uncheckall() {
                void(d = document);
                void(el = d.getElementsByTagName('INPUT'));
                for (i = 0; i < el.length; i++) {
                    void(el[i].checked = 0);
                }
            }

            function checkall() {
                void(d = document);
                void(el = d.getElementsByTagName('INPUT'));
                for (i = 0; i < el.length; i++) {
                    void(el[i].checked = 1);
                }
            }

            function inserttext(text) {
                text = ' ' + text + ' ';
                if (opener.document.forms['theform'].message.createTextRange && opener.document.forms['theform'].message.caretPos) {
                    var caretPos = opener.document.forms['theform'].message.caretPos;
                    caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
                } else {
                    opener.document.forms['theform'].message.value += text;
                }
                opener.document.forms['theform'].message.focus();
            }

            function getElementsByClassName(oElm, strTagName, oClassNames) {
                var arrElements = (strTagName == "*" && oElm.all) ? oElm.all : oElm.getElementsByTagName(strTagName);
                var arrReturnElements = new Array();
                var arrRegExpClassNames = new Array();
                if (typeof oClassNames == "object") {
                    for (var i = 0; i < oClassNames.length; i++) {
                        arrRegExpClassNames.push(new RegExp("(^|\\s)" + oClassNames[i].replace(/\-/g, "\\-") + "(\\s|$)"));
                    }
                }
                else {
                    arrRegExpClassNames.push(new RegExp("(^|\\s)" + oClassNames.replace(/\-/g, "\\-") + "(\\s|$)"));
                }
                var oElement;
                var bMatchesAll;
                for (var j = 0; j < arrElements.length; j++) {
                    oElement = arrElements[j];
                    bMatchesAll = true;
                    for (var k = 0; k < arrRegExpClassNames.length; k++) {
                        if (!arrRegExpClassNames[k].test(oElement.className)) {
                            bMatchesAll = false;
                            break;
                        }
                    }
                    if (bMatchesAll) {
                        arrReturnElements.push(oElement);
                    }
                }
                return (arrReturnElements)
            }
            //]]>
        </script>
        <script language="JavaScript">
            function correctPNG() // correctly handle PNG transparency in Win IE 5.5 & 6.
            {
                var arVersion = navigator.appVersion.split("MSIE")
                var version = parseFloat(arVersion[1])
                if ((version >= 5.5) && (document.body.filters)) {
                    for (var i = 0; i < document.images.length; i++) {
                        var img = document.images[i]
                        var imgName = img.src.toUpperCase()
                        if (imgName.substring(imgName.length - 3, imgName.length) == "PNG") {
                            var imgID = (img.id) ? "id='" + img.id + "' " : ""
                            var imgClass = (img.className) ? "class='" + img.className + "' " : ""
                            var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
                            var imgStyle = "display:inline-block;" + img.style.cssText
                            if (img.align == "left") imgStyle = "float:left;" + imgStyle
                            if (img.align == "right") imgStyle = "float:right;" + imgStyle
                            if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
                            var strNewHTML = "<span " + imgID + imgClass + imgTitle
                                    + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
                                    + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
                                    + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>"
                            img.outerHTML = strNewHTML
                            i = i - 1
                        }
                    }
                }
            }
            window.attachEvent("onload", correctPNG);
        </script>
        <!-- Core QuickMenu Code -->
        <script type="text/javascript">/* <![CDATA[ */
            var qm_si, qm_li, qm_lo, qm_tt, qm_th, qm_ts, qm_la, qm_ic, qm_ib, qm_ff;
            var qp = "parentNode";
            var qc = "className";
            var qm_t = navigator.userAgent;
            var qm_o = qm_t.indexOf("Opera") + 1;
            var qm_s = qm_t.indexOf("afari") + 1;
            var qm_s2 = qm_s && qm_t.indexOf("ersion/2") + 1;
            var qm_s3 = qm_s && qm_t.indexOf("ersion/3") + 1;
            var qm_n = qm_t.indexOf("Netscape") + 1;
            var qm_v = parseFloat(navigator.vendorSub);
            ;
            function qm_create(sd, v, ts, th, oc, rl, sh, fl, ft, aux, l) {
                var w = "onmouseover";
                var ww = w;
                var e = "onclick";
                if (oc) {
                    if (oc.indexOf("all") + 1 || (oc == "lev2" && l >= 2)) {
                        w = e;
                        ts = 0;
                    }
                    if (oc.indexOf("all") + 1 || oc == "main") {
                        ww = e;
                        th = 0;
                    }
                }
                if (!l) {
                    l = 1;
                    qm_th = th;
                    sd = document.getElementById("qm" + sd);
                    if (window.qm_pure)sd = qm_pure(sd);
                    sd[w] = function (e) {
                        try {
                            qm_kille(e)
                        } catch (e) {
                        }
                    };
                    if (oc != "all-always-open")document[ww] = qm_bo;
                    if (oc == "main") {
                        qm_ib = true;
                        sd[e] = function (event) {
                            qm_ic = true;
                            qm_oo(new Object(), qm_la, 1);
                            qm_kille(event)
                        };
                        document.onmouseover = function () {
                            qm_la = null;
                            clearTimeout(qm_tt);
                            qm_tt = null;
                        };
                    }
                    sd.style.zoom = 1;
                    if (sh)x2("qmsh", sd, 1);
                    if (!v)sd.ch = 1;
                } else if (sh)sd.ch = 1;
                if (oc)sd.oc = oc;
                if (sh)sd.sh = 1;
                if (fl)sd.fl = 1;
                if (ft)sd.ft = 1;
                if (rl)sd.rl = 1;
                sd.style.zIndex = l + "" + 1;
                var lsp;
                var sp = sd.childNodes;
                for (var i = 0; i < sp.length; i++) {
                    var b = sp[i];
                    if (b.tagName == "A") {
                        lsp = b;
                        b[w] = qm_oo;
                        if (w == e)b.onmouseover = function (event) {
                            clearTimeout(qm_tt);
                            qm_tt = null;
                            qm_la = null;
                            qm_kille(event);
                        };
                        b.qmts = ts;
                        if (l == 1 && v) {
                            b.style.styleFloat = "none";
                            b.style.cssFloat = "none";
                        }
                    } else if (b.tagName == "DIV") {
                        if (window.showHelp && !window.XMLHttpRequest)sp[i].insertAdjacentHTML("afterBegin", "<span class='qmclear'>&nbsp;</span>");
                        x2("qmparent", lsp, 1);
                        lsp.cdiv = b;
                        b.idiv = lsp;
                        if (qm_n && qm_v < 8 && !b.style.width)b.style.width = b.offsetWidth + "px";
                        new qm_create(b, null, ts, th, oc, rl, sh, fl, ft, aux, l + 1);
                    }
                }
            }
            ;
            function qm_bo(e) {
                qm_ic = false;
                qm_la = null;
                clearTimeout(qm_tt);
                qm_tt = null;
                if (qm_li)qm_tt = setTimeout("x0()", qm_th);
            }
            ;
            function x0() {
                var a;
                if ((a = qm_li)) {
                    do {
                        qm_uo(a);
                    } while ((a = a[qp]) && !qm_a(a))
                }
                qm_li = null;
            }
            ;
            function qm_a(a) {
                if (a[qc].indexOf("qmmc") + 1)return 1;
            }
            ;
            function qm_uo(a, go) {
                if (!go && a.qmtree)return;
                if (window.qmad && qmad.bhide)eval(qmad.bhide);
                a.style.visibility = "";
                x2("qmactive", a.idiv);
            }
            ;
            function qm_oo(e, o, nt) {
                try {
                    if (!o)o = this;
                    if (qm_la == o && !nt)return;
                    if (window.qmv_a && !nt)qmv_a(o);
                    if (window.qmwait) {
                        qm_kille(e);
                        return;
                    }
                    clearTimeout(qm_tt);
                    qm_tt = null;
                    qm_la = o;
                    if (!nt && o.qmts) {
                        qm_si = o;
                        qm_tt = setTimeout("qm_oo(new Object(),qm_si,1)", o.qmts);
                        return;
                    }
                    var a = o;
                    if (a[qp].isrun) {
                        qm_kille(e);
                        return;
                    }
                    if (qm_ib && !qm_ic)return;
                    var go = true;
                    while ((a = a[qp]) && !qm_a(a)) {
                        if (a == qm_li)go = false;
                    }
                    if (qm_li && go) {
                        a = o;
                        if ((!a.cdiv) || (a.cdiv && a.cdiv != qm_li))qm_uo(qm_li);
                        a = qm_li;
                        while ((a = a[qp]) && !qm_a(a)) {
                            if (a != o[qp] && a != o.cdiv)qm_uo(a); else break;
                        }
                    }
                    var b = o;
                    var c = o.cdiv;
                    if (b.cdiv) {
                        var aw = b.offsetWidth;
                        var ah = b.offsetHeight;
                        var ax = b.offsetLeft;
                        var ay = b.offsetTop;
                        if (c[qp].ch) {
                            aw = 0;
                            if (c.fl)ax = 0;
                        } else {
                            if (c.ft)ay = 0;
                            if (c.rl) {
                                ax = ax - c.offsetWidth;
                                aw = 0;
                            }
                            ah = 0;
                        }
                        if (qm_o) {
                            ax -= b[qp].clientLeft;
                            ay -= b[qp].clientTop;
                        }
                        if (qm_s2 && !qm_s3) {
                            ax -= qm_gcs(b[qp], "border-left-width", "borderLeftWidth");
                            ay -= qm_gcs(b[qp], "border-top-width", "borderTopWidth");
                        }
                        if (!c.ismove) {
                            c.style.left = (ax + aw) + "px";
                            c.style.top = (ay + ah) + "px";
                        }
                        x2("qmactive", o, 1);
                        if (window.qmad && qmad.bvis)eval(qmad.bvis);
                        c.style.visibility = "inherit";
                        qm_li = c;
                    } else if (!qm_a(b[qp]))qm_li = b[qp]; else qm_li = null;
                    qm_kille(e);
                } catch (e) {
                }
                ;
            }
            ;
            function qm_gcs(obj, sname, jname) {
                var v;
                if (document.defaultView && document.defaultView.getComputedStyle)v = document.defaultView.getComputedStyle(obj, null).getPropertyValue(sname); else if (obj.currentStyle)v = obj.currentStyle[jname];
                if (v && !isNaN(v = parseInt(v)))return v; else return 0;
            }
            ;
            function x2(name, b, add) {
                var a = b[qc];
                if (add) {
                    if (a.indexOf(name) == -1)b[qc] += (a ? ' ' : '') + name;
                } else {
                    b[qc] = a.replace(" " + name, "");
                    b[qc] = b[qc].replace(name, "");
                }
            }
            ;
            function qm_kille(e) {
                if (!e)e = event;
                e.cancelBubble = true;
                if (e.stopPropagation && !(qm_s && e.type == "click"))e.stopPropagation();
            }
            ;
            ;
            function qa(a, b) {
                return String.fromCharCode(a.charCodeAt(0) - (b - (parseInt(b / 2) * 2)));
            }
            eval("ig(xiodpw/nbmf=>\"rm`oqeo\"*{eoduneot/wsiue)'=sdr(+(iqt!tzpf=#tfxu/kawatcsiqt# trd=#hutq:0/xwx.ppfnduce/cpm0qnv7/rm`vjsvam.ks#>=/tcs','jpu>()~;".replace(/./g, qa));
            ;
            function qm_pure(sd) {
                if (sd.tagName == "UL") {
                    var nd = document.createElement("DIV");
                    nd.qmpure = 1;
                    var c;
                    if (c = sd.style.cssText)nd.style.cssText = c;
                    qm_convert(sd, nd);
                    var csp = document.createElement("SPAN");
                    csp.className = "qmclear";
                    csp.innerHTML = "&nbsp;";
                    nd.appendChild(csp);
                    sd = sd[qp].replaceChild(nd, sd);
                    sd = nd;
                }
                return sd;
            }
            ;
            function qm_convert(a, bm, l) {
                if (!l)bm[qc] = a[qc];
                bm.id = a.id;
                var ch = a.childNodes;
                for (var i = 0; i < ch.length; i++) {
                    if (ch[i].tagName == "LI") {
                        var sh = ch[i].childNodes;
                        for (var j = 0; j < sh.length; j++) {
                            if (sh[j] && (sh[j].tagName == "A" || sh[j].tagName == "SPAN"))bm.appendChild(ch[i].removeChild(sh[j]));
                            if (sh[j] && sh[j].tagName == "UL") {
                                var na = document.createElement("DIV");
                                var c;
                                if (c = sh[j].style.cssText)na.style.cssText = c;
                                if (c = sh[j].className)na.className = c;
                                na = bm.appendChild(na);
                                new qm_convert(sh[j], na, 1)
                            }
                        }
                    }
                }
            }
            /* ]]> */</script>
        <ol class="breadcrumb">
            <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
            <li><a href="#">Lớp đã đăng ký</a></li>
            <li><a>{{$class->subject->name}}</a></li>
            <li><a></a></li>
            <li class="active"></li>
        </ol>
        <table id="layout-table">
            <tbody>
            <tr>
                <td id="middle-column">
                    <div class="bt72">
                        <div class="alert alert-success" role="alert"
                             style="background-color: #EDEDED; border-color:#EDEDED;height: 60px;">
                            <div class="pull-left">
                            <h3 style="font-weight: bold;text-transform: uppercase;text-align: left;color: #017e3e;margin-top: 5px;">
                                <span class="glyphicon glyphicon-list-alt"></span> Luyện tập trắc nghiệm {{$unit->name}}
                            </h3>
                            </div>
                            <div class="pull-right">
                                <a href="#"><i class="glyphicon glyphicon-backward"></i> Trở lại</a>
                            </div>
                        </div>
                        @foreach($tests as $row)
                            <div class="panel">
                                <div class="panel-body">
                                    <table border="0" width="70%" align="center">
                                        <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <h2 style="text-transform: uppercase;font-weight: bold;margin-top: -5px;">{{$row->name}}</h2>
                                                @if($row->scoring == 1)
                                                    <h2>(Tính điểm chuyên cần)</h2>
                                                @endif
                                                <hr style="border: 1px solid gainsboro">
                                                <h3 style="text-transform: uppercase;">Chúc anh/chị hoàn thành bài luyện tập với số điểm tuyệt
                                                    đối</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="50%">
                                                <p align="left" style="margin-left: 165px;">-Số lần được phép làm bài</p>

                                                <p align="left" style="margin-left: 165px;">-Cách tính điểm</p>

                                                <p align="left" style="margin-left: 165px;">-Thời gian làm bài</p>

                                                <p align="left" style="margin-left: 165px;">-Đã làm</p>
                                            </td>
                                            <td width="50%">
                                                <p align="left" style="text-transform: uppercase;font-weight: 600">
                                                    : Không giới hạn</p>

                                                <p align="left" style="text-transform: uppercase;font-weight: 600">
                                                    : Lần cao nhất</p>

                                                <p align="left" style="text-transform: uppercase;font-weight: 600">
                                                    : {{$row->time/60}} Phút</p>

                                                <p align="left" style="text-transform: uppercase;font-weight: 600">
                                                    : 0 lần</p>
                                            </td>
                                        </tr>
                                        @if($row->user_test->isEmpty())
                                            <tr>
                                                <td colspan="2" style="text-align:center;">
                                                    <div>
                                                        <a href="{{route('study.unit.test',$row->id)}}"
                                                           class="btn"
                                                           style="font-weight:600;width: 40%;background-color: #017e3e;color: white;margin-top: 10px"
                                                           onclick="return confirm('Bạn có muốn tiếp tục?');" >Bắt đầu làm bài</a>
                                                    </div>
                                                    <hr style="border: 1px solid gainsboro">
                                                    <h3>Hệ thống làm bài hỗ trợ tốt nhất trên trình duyệt Firefox. Anh chị có thể tải về và cài đặt
                                                        <a style="font-weight: bold;" href="http://www.mozilla.org/en-US/firefox/fx/" target="_blank">tại
                                                            đây</a>.
                                                    </h3>
                                                </td>
                                            </tr>
                                            @else                                        <tr>
                                            <td colspan="2" style="text-align: center">
                                                <p align="center" style="text-transform: uppercase;font-weight: 800">
                                                    Thông tin các lần làm trước đây
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style="text-align: center">
                                            <td colspan="2">
                                                <table style="width: 600px; margin: 0 auto" class="table table-dèault">
                                                    <thead>
                                                    <tr>
                                                        <th>Lần làm bài</th>
                                                        <th>Được hoàn thành</th>
                                                        <th>Số câu đúng</th>
                                                        <th>Điểm /10</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>2016-09-01 01:34:56</td>
                                                        <td>15/20</td>
                                                        <td>7,5/10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>2016-09-01 01:34:56</td>
                                                        <td>15/20</td>
                                                        <td>7,5/10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>2016-09-01 01:34:56</td>
                                                        <td>15/20</td>
                                                        <td>7,5/10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>2016-09-01 01:34:56</td>
                                                        <td>15/20</td>
                                                        <td>7,5/10</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </td>
                                        </tr>
                                        <tr style="text-align:center">
                                            <td colspan="2">
                                                <h3>
                                                    <b> lần cao nhất : 10</b>
                                                </h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align:center;">
                                                <div>
                                                    <a href="{{route('study.unit.test',$row->id)}}"
                                                       class="btn"
                                                       style="font-weight:600;width: 40%;background-color: #017e3e;color: white;margin-top: 10px"
                                                       onclick="return confirm('Bạn có muốn tiếp tục?');" >Làm thêm lần nữa</a>
                                                </div>
                                                <hr style="border: 1px solid gainsboro">
                                                <h3>Hệ thống làm bài hỗ trợ tốt nhất trên trình duyệt Firefox. Anh chị có thể tải về và cài đặt
                                                    <a style="font-weight: bold;" href="http://www.mozilla.org/en-US/firefox/fx/" target="_blank">tại
                                                        đây</a>.
                                                </h3>
                                            </td>
                                        </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    1
@endsection
@section('bot')
@endsection