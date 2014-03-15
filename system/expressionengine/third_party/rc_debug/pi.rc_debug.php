<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* RC Debug
*
* @package     ExpressionEngine
* @category    Plugin
* @author      Red Carrot
* @copyright   Copyright (c) 2014, Andrew Fairlie
* @link        http://redcarrot.co.uk/
*/

$plugin_info = array(
'pi_name'         => 'RC Debug',
'pi_version'      => '1.1',
'pi_author'       => 'Red Carrot',
'pi_author_url'   => 'http://redcarrot.co.uk/',
'pi_description'  => 'Returns markdown formatted output to help the Stack Exchangers debug your EE problems'
);

class Rc_debug {
  public $return_data = "";
  
  public function __construct()
  {
    $this->EE =& get_instance();
    
    $include = ee()->TMPL->fetch_param('include');
    
    // If not set, show everything
    if($include==""){
      $include = "installation|accessories|extensions|fieldtypes|modules|channels|templates|template_routes|status_groups";
    }
    
    $toShow = explode('|',$include);
    
    $this->return_data  = "----------\n# Red Carrot Debug Output \n\n";
    
    if(in_array("installation",$toShow)){ $this->return_data .= $this->getInstallationData(); }
    if(in_array("accesories",$toShow)){ $this->return_data .= $this->getAccessories(); }
    if(in_array("extensions",$toShow)){ $this->return_data .= $this->getExtensions(); }
    if(in_array("fieldtypes",$toShow)){ $this->return_data .= $this->getFieldTypes(); }
    if(in_array("modules",$toShow)){ $this->return_data .= $this->getModules(); }
    if(in_array("channels",$toShow)){ $this->return_data .= $this->getChannels(); }
    if(in_array("templates",$toShow)){ $this->return_data .= $this->getTemplates(); }
    if(in_array("template_routes",$toShow)){ $this->return_data .= $this->getTemplateRoutes(); }
    if(in_array("status_groups",$toShow)){ $this->return_data .= $this->getStatusGroups(); }
  }
  
  
  private function getInstallationData(){
    $tr = "## Installation \n";
    $tr .= "- **ExpressionEngine Version:** ".APP_VER." (".APP_BUILD.")\n";
    $tr .= "- **Themes Path:** ".PATH_THEMES."\n";
    $tr .= "- **ExpressionEngine Folder Path:** ".APPPATH."\n";
    $tr .= "- **System Folder Path:** ".BASEPATH."\n";
    $tr .= "- **Third Party Path:** ".PATH_THIRD."\n";
    $tr .= "- **Third Party Themes Path:** ".PATH_THIRD_THEMES."\n";
    $tr .= "- **Site Index:** ".FCPATH.SELF;
    $tr .= "\n\n\n";
    return $tr; 
  }
  
  private function getAccessories(){
    $tr = "## Accessories \n";
    $accessories = ee()->db->select('class, accessory_id,member_groups,accessory_version')
                        ->from('accessories')
                        ->get();
    
    if ($accessories->num_rows() > 0)
    {
      foreach($accessories->result_array() as $accessory)
      {
        $tr .= "- **". $accessory['class'] ."**\n";
        $tr .= "    - **ID:** ". $accessory['accessory_id']."\n";
        $tr .= "    - **Member Groups:** ". $accessory['member_groups']."\n";
        $tr .= "    - **Version:** ". $accessory['accessory_version']."\n";
      }
    }


    $tr .= "\n\n\n";
    return $tr;
  }  


  private function getFieldTypes(){
    $tr = "## Field Types \n";
    $fieldtypes = ee()->db->select('fieldtype_id,name,version')
                        ->from('fieldtypes')
                        ->get();
    
    if ($fieldtypes->num_rows() > 0)
    {
      foreach($fieldtypes->result_array() as $fieldtype)
      {
        $tr .= "- **". $fieldtype['name'] ."**\n";
        $tr .= "    - **ID:** ". $fieldtype['fieldtype_id']."\n";
        $tr .= "    - **Version:** ". $fieldtype['version']."\n";
      }
    }


    $tr .= "\n\n\n";
    return $tr;
  }


  private function getExtensions(){
    $tr = "## Extensions \n";
    $extensions = ee()->db->select('extension_id,class,method,priority,hook,enabled,version')
                        ->from('extensions')
                        ->get();
    
    if ($extensions->num_rows() > 0)
    {
      foreach($extensions->result_array() as $extension)
      {
        $tr .= "- **". $extension['class'] ." / ". $extension['method'] ." **\n";
        $tr .= "    - **ID:** ". $extension['extension_id']."\n";
        $tr .= "    - **Priority:** ". $extension['priority']."\n";
        $tr .= "    - **Hook:** ". $extension['hook']."\n";
        $tr .= "    - **Enabled:** ". $extension['enabled']."\n";
        $tr .= "    - **Version:** ". $extension['version']."\n";
      }
    }


    $tr .= "\n\n\n";
    return $tr;
  }
  
  private function getModules(){
    $tr = "## Modules \n";
    $modules = ee()->db->select('module_id,module_name,module_version')
                        ->from('modules')
                        ->get();
    
    if ($modules->num_rows() > 0)
    {
      foreach($modules->result_array() as $module)
      {
        $tr .= "- **". $module['module_name']."**\n";
        $tr .= "    - **ID:** ". $module['module_id']."\n";
        $tr .= "    - **Version:** ". $module['module_version']."\n";
      }
    }


    $tr .= "\n\n\n";
    return $tr;
  }
  
  
  private function getChannels(){
    $tr = "## Channel Structure \n";
    
    $channels = ee()->db->select('channel_id,channel_name,channel_title,cat_group,status_group,deft_status,field_group')
                        ->from('channels')
                        ->get();
    
    if ($channels->num_rows() > 0)
    {
      foreach($channels->result_array() as $row)
      {
        $tr .= "- **". $row['channel_title'] ."**\n";
        $tr .= "    - **ID:** ". $row['channel_id']."\n";
        $tr .= "    - **Name:** ". $row['channel_name']."\n";
        $tr .= "    - **Category Group ID:** ". $row['cat_group']."\n";
        $tr .= "    - **Status Group ID:** ". $row['status_group']."\n";
        $tr .= "    - **Default Status:** ". $row['deft_status']."\n";
        $tr .= "    - **Fields**\n";
        
        $fields = ee()->db->select('field_id,field_name,field_label,field_type,field_required,field_search')
                            ->from('channel_fields')
                            ->where(array('group_id'=>$row['field_group']))
                            ->get();

        foreach($fields->result_array() as $field){
          $tr .= "        - **Label:** ". $field['field_label'] ."\n";
          $tr .= "            - **ID:** ". $field['field_id'] ."\n";
          $tr .= "            - **Name:** ". $field['field_name'] ."\n";
          $tr .= "            - **Type:** ". $field['field_type'] ."\n";
          $tr .= "            - **Required:** ". $field['field_required'] ."\n";
          $tr .= "            - **Searchable:** ". $field['field_search'] ."\n";
        }
      }
    }
    
    
    $tr .= "\n\n\n";
    return $tr;
  }
  
  private function getStatusGroups(){
    $tr = "## Status Groups \n";
    
    $statusGroups = ee()->db->select('group_id,group_name')
                        ->from('status_groups')
                        ->get();
    
    if ($statusGroups->num_rows() > 0)
    {
      foreach($statusGroups->result_array() as $row)
      {
        $tr .= "- **". $row['group_name'] .":** ID ". $row['group_id'] ."\n";  
          
        $statuses = ee()->db->select('status')
                            ->from('statuses')
                            ->where(array('group_id'=>$row['group_id']))
                            ->get();
        
        foreach($statuses->result_array() as $status){
          $tr .= "    - **Name:** ". $status['status']."\n";
        }

      }
    }
    
    $tr .= "\n\n\n";
    return $tr;

  }
  
  private function getTemplates(){
    $tr = "## Templates \n";
    
    $templateGroups = ee()->db->select('group_id,group_name,is_site_default')
                        ->from('template_groups')
                        ->order_by('is_site_default','desc')
                        ->get();
    
    if ($templateGroups->num_rows() > 0)
    {
      foreach($templateGroups->result_array() as $row)
      {
        $tr .= "- **". $row['group_name'] ."**\n";
        $tr .= "    - **Site Default:** ". $row['is_site_default']."\n";
        $tr .= "    - **ID:** ". $row['group_id']."\n";
        $tr .= "    - **Templates**\n";
        
        
        $templates = ee()->db->select('template_id,template_name,save_template_file,template_type,cache,refresh,allow_php,php_parse_location')
                            ->from('templates')
                            ->where(array('group_id'=>$row['group_id']))
                            ->get();

        foreach($templates->result_array() as $template){
          $tr .= "        - **Name:** ". $template['template_name'] ."\n";
          $tr .= "            - **ID:** ". $template['template_id'] ."\n";
          $tr .= "            - **Saved:** ". $template['save_template_file'] ."\n";
          $tr .= "            - **Type:** ". $template['template_type'] ."\n";
          $tr .= "            - **Cache:** ". $template['cache'] ."\n";
          $tr .= "            - **Refresh:** ". $template['refresh'] ."\n";
          $tr .= "            - **PHP:** ". $template['allow_php'] ."\n";
          $tr .= "            - **PHP Parse Order:** ". $template['php_parse_location'] ."\n";
        }
          
      }
    }
    
    $tr .= "\n\n\n";
    return $tr;

  }
  
  
  
  
  
  private function getTemplateRoutes(){
    $tr = "## Template Routes \n";
    
    $results = ee()->db->select('route,template_id')->from('template_routes')->where(array('route IS NOT NULL' => null))->get();
    
    if ($results->num_rows() > 0)
    {
      foreach($results->result_array() as $row)
      {
        $tr .= "- **Template ID:** ". $row['template_id']."\n";
        $tr .= "    - **Configured Route:** ". $row['route']."\n";
      }
    } else {
      $tr .= "No template routes";
    }
    $tr .= "\n\n\n";
    return $tr;
  }
}
