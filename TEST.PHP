<script >
function Gsitesearch(curobj){
  curobj.q.value=curobj.qfront.value
}
</script>

<form action="http://www.google.com/search" method="get" onSubmit="Gsitesearch(this)">
  <p>태그인넷 검색기<br />
    <input name="q" type="hidden" />
    <input name="qfront" type="text" style="width: 180px" />
    <input type="submit" value="Search" /></p>
</form>
