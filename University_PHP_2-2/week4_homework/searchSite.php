<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <script >
  function qchange(obj){
    obj.query.value=document.getElementById("search").value;
  }
  </script>

  <body>

    <table>
      <tr>
        검색기능
      </tr>
      <tr>
        <td><input id="search" type="text" placeholder="입력하시오" /></td>
        <td>
          <form action="http://search.naver.com/search.naver?sm=nnf_hty" method="get" onSubmit="qchange(this)">
            <input name="query" type="hidden" />
            <input type="submit" value="네이버로  검색" />
          </form>
        </td>
        <td>
          <form action="http://www.google.com/search" method="get" onSubmit="qchange(this)">
            <input name="query" type="hidden" />
            <input type="submit" value="구글로 검색" />
          </form>
        </td>
      </tr>
    </table>

  </body>
</html>
