function getXMLHttpRequest() {
  if (navigator.appName != "Microsoft Internet Explorer") {
    return new XMLHttpRequest;
  } else {
    try {
      return new ActiveXObject('MSXML2.XMLHTTP.3.0');
    } catch(ex) {
      return null;
    };
  };
};