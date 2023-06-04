<!--<html>-->
<!--<head>-->
<!--    <title>Examples to remove multiple or all items from dropdown.</title>-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<!--    <script>-->
<!--        $(document).ready(function () {-->
<!--            $("#btnRemoveAll").click(function () {-->
<!--                $('#ddlItems')-->
<!--                    .find('option')-->
<!--                    .remove();-->
<!--            });-->
<!---->
<!--            $("#btnRemoveMultiple").click(function () {-->
<!--                $('#ddlItems option').filter('[value="1"],[value="2"],[value="5"]').remove();-->
<!--            });-->
<!--        });-->
<!--function selected(){-->
<!--    var select= document.getElementById('ddlItems').value;-->
<!--    var value = select.options[select.selectedIndex].value;-->
<!--    console.log(value);-->
<!--}-->
<!---->
<!--    </script>-->
<!--</head>-->
<!---->
<!--<body>-->
<!--<select id="ddlItems" style='width:240px;' onchange="selected()">-->
<!--    <option value="Item1">Item1</option>-->
<!--    <option value="Item2">Item2</option>-->
<!--    <option value="Item3">Item3</option>-->
<!--    <option value="Item4">Item4</option>-->
<!--    <option value="Item5">Item5</option>-->
<!--</select><br /><br />-->
<!---->
<!--<input type="submit" id="btnRemoveMultiple" value="Remove multiple items" />-->
<!--<input type="submit" id="btnRemoveAll" value="Remove All" />-->
<!--</body>-->
<!--</html>-->
<!DOCTYPE html>
<html>
<style>
    #language{
        font-size: 30px;
    }
</style>
<body>
<!--<section class="content card">-->
<!--    <div class="card-body">-->
<!--        <div class="form-group">-->
<!--            <label>Hotel Amenities</label>-->
<!--            <select id="amenities" onchange="update()" required="required" class="form-control select2" name="room_facilities[]" multiple="multiple" style="width:100%;">-->
<!--                <option value="hm" >Hotel Amenities</option>-->
<!--                <option value="en">English</option>-->
<!--                <option value="es">Español</option>-->
<!--                <option value="pt">Português</option>-->
<!--                <option value="Item1">Item1</option>-->
<!--                <option value="Item2">Item2</option>-->
<!--                <option value="Item3">Item3</option>-->
<!--                <option value="Item4">Item4</option>-->
<!--                <option value="Item5">Item5</option>-->
<!--            </select>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<input type="text" id="options" multiple>
<select id="language" onChange="update()" style="width: 100%; height: 50px" multiselect>
    <option value="en">English</option>
    <option value="es">Español</option>
    <option value="pt">Português</option>
    <option value="Item1">Item1</option>
    <option value="Item2">Item2</option>
    <option value="Item3">Item3</option>
    <option value="Item4">Item4</option>
    <option value="Item5">Item5</option>
</select>

<script type="text/javascript">
    document.getElementById("language").multiple = true;
    function update() {
        var select = document.getElementById('language');
        var option = select.options[select.selectedIndex];
        var selectedValue = option.value;
        console.log(selectedValue)

        var array= [];
        for(var i = 0; i<select.options.length; i++){
            array.push(selectedValue);
        }

        console.log(array)


        // Find the selected option and remove it
        for (var i = 0; i < select.options.length; i++) {
            if (select.options[i].value === selectedValue) {
                select.remove(i);
                break;
            }
        }
    }

    update();
</script>
</body>
</html>