# Example of using WlModelMultiModel.
 <pre>
 namespace WlSdkExample;
 
 use WellnessLiving\Core\Passport\Login\Enter\EnterModel;
 use WellnessLiving\Core\Passport\Login\Enter\NotepadModel;
 use WellnessLiving\Wl\Catalog\CatalogList\ElementModel;
 use WellnessLiving\WlAssertException;
 use WellnessLiving\WlModelMultiModel;
 use WellnessLiving\WlUserException;
 
 require_once __DIR__.'/WellnessLiving/wl-autoloader.php';
 require_once __DIR__.'/example-config.php';
 
 try
 {
   $o_config=new ExampleConfig();
 
   // Retrieve notepad (it is a separate step of user sign in process)
   $o_notepad=new NotepadModel($o_config);
   $o_notepad->s_login='//* Put your login here */';
   $o_notepad->get();
 
   // Sign in a user
   $o_enter=new EnterModel($o_config);
   $o_enter->cookieSet($o_notepad->cookieGet()); // Keep cookies to keep session.
   $o_enter->s_login='//* Put your login here */';
   $o_enter->s_notepad=$o_notepad->s_notepad;
   $o_enter->s_password=$o_notepad->hash('//* Put your password here */');
   $o_enter->post();
   
   // Create first model to get data
   $model_1=new ElementModel( $o_config);
   $model_1->cookieSet($o_notepad->cookieGet());
   $model_1->k_id='//* Put your product id here */';
   $model_1->k_location='//* Put your location key here */';
   $model_1->id_sale='//* Put your sale id here */';

   // Create second model to get data
   $model_2=new ElementModel( $o_config);
   $model_2->cookieSet($o_notepad->cookieGet());
   $model_2->k_id='//* Put your product id here */';
   $model_2->k_location='//* Put your location key here */';
   $model_2->id_sale='//* Put your sale id here*/';

   // Create multi model and add ElementModels to request
   $o_multi_model=new WlModelMultiModel($o_config);
   $o_multi_model->add($model_1);
   $o_multi_model->add($model_2);

   // Get the data for added models
   $o_multi_model->getMulti();
   
   // Show model data
   print_r($model_1->a_data);
   print_r($model_2->a_data);
 }
 catch(WlAssertException $e)
 {
   echo $e;
   return;
 }
 catch(WlUserException $e)
 {
   echo $e->getMessage()."\n";
   return;
 }
 </pre>
 
