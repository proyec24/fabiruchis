<?php
include "bd.php";
header('Content-Type: application/json');
$resultadoArray = array();
$aux=1;
if($aux == 1){
  $Query = "SELECT * FROM profesor WHERE id_profesor >= '$aux'";
  $Resultado = mysqli_query($con, $Query);
  foreach($Resultado as $row){
    $resultadoArray[] = $row;
  }
}
echo json_encode($resultadoArray);
/*JsonArrayRequest request = new JsonArrayRequest(Request.Method.GET, "https://pifab.herokuapp.com/insertar_profesor.php", null,
                new Response.Listener<JSONArray>() {
                    @Override
                    public void onResponse(JSONArray response) {
                        try{
                            for (int i = 0; i < response.length(); i++) {
                                JSONObject plantel = response.getJSONObject(i);
                                String id = plantel.getString("ID_Plantel");
                                String nombre = plantel.getString("Nombre_Plantel");
                                String direccion = plantel.getString("Direccion");
                                String telefono = plantel.getString("Telefono");
                                listPlantel.add(new Plantel(id,nombre,direccion,telefono));
                            }
                        }catch (JSONException e){
                            e.printStackTrace();
                        }
                    }
                }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                error.printStackTrace();
            }
        });
        mRequestQueue.add(request);
        getAllPlanteles();
        JsonArrayRequest request = new JsonArrayRequest(Request.Method.GET, "https://pifab.herokuapp.com/insertar_profesor.php", null,
                new Response.Listener<JSONArray>() {
                    @Override
                    public void onResponse(JSONArray response) {
                        try{
                            for (int i = 0; i < response.length(); i++) {
                                JSONObject plantel = response.getJSONObject(i);
                                String id = plantel.getString("ID_Plantel");
                                String nombre = plantel.getString("Nombre_Plantel");
                                String direccion = plantel.getString("Direccion");
                                String telefono = plantel.getString("Telefono");
                                listPlantel.add(new Plantel(id,nombre,direccion,telefono));
                            }
                        }catch (JSONException e){
                            e.printStackTrace();
                        }
                    }
                }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                error.printStackTrace();
            }
        });
        mRequestQueue.add(request);
        getAllPlanteles();
        */
?>