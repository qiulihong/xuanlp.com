var wly_customer_name = 'quwan.com';
var wly_primary_domain = 'quwan.com';
var wly_conv_selectors = ['a.buy_btn'];
var wly_goco_selectors = ['#porder_btn'];
var wly_conow_selectors = ['a.cbtn.nowpay_btn'];

function wly_purify_sku_url() {
  return /http:\/\/[-.0-9a-zA-Z\/]+\/[^.]+.html/.exec(location.href)[0];
}

function wly_sku_recoed() {
  return ($('a.buy_btn.quehuo_btn').length == 0);
}

function wly_sku_available() {
  return ($('a.buy_btn.quehuo_btn').length == 0);
}

function wly_sku_page() {
  return (null != /goods-[0-9]+\.html/.exec(location.href));
}

function wly_cart_page() {
  return (null != /flow\.php\?step=checkout/.exec(location.href));
}

function wly_action_page() {
  return (null != /flow\.php\?step=done/.exec(location.href));
}

function wly_sku_id() {
  var tmp = /goods-[0-9]+/.exec(location.href);
  if (tmp != null) {
    return tmp[0].substring("goods-".length, tmp[0].length);
  }

  tmp = /id=[0-9]+/.exec(location.href);
  if (tmp != null) {
    return tmp[0].substring(3, tmp[0].length);
  }
  return '';
}

function wly_sku_detail() {
 
  var o = new Object;
  o.id = wly_sku_id();
  o.url = wly_purify_sku_url();
  o.title=$('ul.info li.name strong').text();
  o.img=$('div.jqzoom img.switch_item').attr('src');
  o.price = $('ul.info span.sell').text();
  o.orgprice= $('ul.info b.price').text();
  o.brand = $("ul.info li:contains('品牌') a.info_a:first").text();
  o.available = wly_sku_available();
  o.recoed = wly_sku_recoed();
  o.category = '';
  $('div.top_nav a:gt(0)').each(function() {
      o.category += $(this).text() + '\t';
    });
  return o;
}

function wly_orderlist() {
  var orders = new Object;
  orders.list = new Array();
  orders.total_price = /[.0-9]+/.exec($('#now_pay_money li b').text())[0];
  $('dl.cart_box dd table tbody tr').each(function() {
      var o = new Object;
      var tmp = $(this).find('.cb_r11 a').attr('href');
      o.price = $(this).find('.cb_r2').text();
      o.count = $(this).find('.cb_r4').text();
      o.id = /goods-[0-9]+/.exec(tmp)[0];
      o.id = o.id.substring("goods-".length, o.id.length);
      orders.list.push(o);
    });
  
  return orders;
}

function wly_actinfo() {
  var o = new Object();
  o.acttype='checkout';
  o.orderid=$('dd:first table tr:last td:eq(0) a').text();
  o.coway=$('dd:first table tr:last td:eq(2)').text();
  o.price=$('dd:first table tr:last td:eq(1) strong').text();
  return o;
}