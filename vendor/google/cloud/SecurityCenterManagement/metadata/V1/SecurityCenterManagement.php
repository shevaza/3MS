<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace GPBMetadata\Google\Cloud\Securitycentermanagement\V1;

class SecurityCenterManagement
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Expr::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
Igoogle/cloud/securitycentermanagement/v1/security_center_management.proto(google.cloud.securitycentermanagement.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/iam/v1/policy.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.protogoogle/rpc/status.protogoogle/type/expr.proto"�
,EffectiveSecurityHealthAnalyticsCustomModule
name (	B�AR
custom_config (26.google.cloud.securitycentermanagement.v1.CustomConfigB�A�
enablement_state (2f.google.cloud.securitycentermanagement.v1.EffectiveSecurityHealthAnalyticsCustomModule.EnablementStateB�A
display_name (	B�A"N
EnablementState 
ENABLEMENT_STATE_UNSPECIFIED 
ENABLED
DISABLED:��A�
Tsecuritycentermanagement.googleapis.com/EffectiveSecurityHealthAnalyticsCustomModule�organizations/{organization}/locations/{location}/effectiveSecurityHealthAnalyticsCustomModules/{effective_security_health_analytics_custom_module}�projects/{project}/locations/{location}/effectiveSecurityHealthAnalyticsCustomModules/{effective_security_health_analytics_custom_module}�folders/{folder}/locations/{location}/effectiveSecurityHealthAnalyticsCustomModules/{effective_security_health_analytics_custom_module}*-effectiveSecurityHealthAnalyticsCustomModules2,effectiveSecurityHealthAnalyticsCustomModule"�
8ListEffectiveSecurityHealthAnalyticsCustomModulesRequestl
parent (	B\\�A�AVTsecuritycentermanagement.googleapis.com/EffectiveSecurityHealthAnalyticsCustomModule
	page_size (B�A

page_token (	B�A"�
9ListEffectiveSecurityHealthAnalyticsCustomModulesResponse�
2effective_security_health_analytics_custom_modules (2V.google.cloud.securitycentermanagement.v1.EffectiveSecurityHealthAnalyticsCustomModule
next_page_token (	"�
6GetEffectiveSecurityHealthAnalyticsCustomModuleRequestj
name (	B\\�A�AV
Tsecuritycentermanagement.googleapis.com/EffectiveSecurityHealthAnalyticsCustomModule"�
#SecurityHealthAnalyticsCustomModule
name (	B�A
display_name (	B�A|
enablement_state (2].google.cloud.securitycentermanagement.v1.SecurityHealthAnalyticsCustomModule.EnablementStateB�A4
update_time (2.google.protobuf.TimestampB�A
last_editor (	B�Al
ancestor_module (	BS�A�AM
Ksecuritycentermanagement.googleapis.com/SecurityHealthAnalyticsCustomModuleR
custom_config (26.google.cloud.securitycentermanagement.v1.CustomConfigB�A"]
EnablementState 
ENABLEMENT_STATE_UNSPECIFIED 
ENABLED
DISABLED
	INHERITED:��A�
Ksecuritycentermanagement.googleapis.com/SecurityHealthAnalyticsCustomModule�organizations/{organization}/locations/{location}/securityHealthAnalyticsCustomModules/{security_health_analytics_custom_module}vprojects/{project}/locations/{location}/securityHealthAnalyticsCustomModules/{security_health_analytics_custom_module}tfolders/{folder}/locations/{location}/securityHealthAnalyticsCustomModules/{security_health_analytics_custom_module}*$securityHealthAnalyticsCustomModules2#securityHealthAnalyticsCustomModule"�
CustomConfig)
	predicate (2.google.type.ExprB�Ac
custom_output (2G.google.cloud.securitycentermanagement.v1.CustomConfig.CustomOutputSpecB�Ag
resource_selector (2G.google.cloud.securitycentermanagement.v1.CustomConfig.ResourceSelectorB�AV
severity (2?.google.cloud.securitycentermanagement.v1.CustomConfig.SeverityB�A
description (	B�A
recommendation (	B�A�
CustomOutputSpeci

properties (2P.google.cloud.securitycentermanagement.v1.CustomConfig.CustomOutputSpec.PropertyB�AO
Property
name (	B�A0
value_expression (2.google.type.ExprB�A/
ResourceSelector
resource_types (	B�A"Q
Severity
SEVERITY_UNSPECIFIED 
CRITICAL
HIGH

MEDIUM
LOW"�
/ListSecurityHealthAnalyticsCustomModulesRequestc
parent (	BS�A�AMKsecuritycentermanagement.googleapis.com/SecurityHealthAnalyticsCustomModule
	page_size (B�A

page_token (	B�A"�
0ListSecurityHealthAnalyticsCustomModulesResponse
(security_health_analytics_custom_modules (2M.google.cloud.securitycentermanagement.v1.SecurityHealthAnalyticsCustomModule
next_page_token (	"�
9ListDescendantSecurityHealthAnalyticsCustomModulesRequestc
parent (	BS�A�AMKsecuritycentermanagement.googleapis.com/SecurityHealthAnalyticsCustomModule
	page_size (B�A

page_token (	B�A"�
:ListDescendantSecurityHealthAnalyticsCustomModulesResponse
(security_health_analytics_custom_modules (2M.google.cloud.securitycentermanagement.v1.SecurityHealthAnalyticsCustomModule
next_page_token (	"�
-GetSecurityHealthAnalyticsCustomModuleRequesta
name (	BS�A�AM
Ksecuritycentermanagement.googleapis.com/SecurityHealthAnalyticsCustomModule"�
0CreateSecurityHealthAnalyticsCustomModuleRequestc
parent (	BS�A�AMKsecuritycentermanagement.googleapis.com/SecurityHealthAnalyticsCustomModule�
\'security_health_analytics_custom_module (2M.google.cloud.securitycentermanagement.v1.SecurityHealthAnalyticsCustomModuleB�A
validate_only (B�A"�
0UpdateSecurityHealthAnalyticsCustomModuleRequest4
update_mask (2.google.protobuf.FieldMaskB�A�
\'security_health_analytics_custom_module (2M.google.cloud.securitycentermanagement.v1.SecurityHealthAnalyticsCustomModuleB�A
validate_only (B�A"�
0DeleteSecurityHealthAnalyticsCustomModuleRequesta
name (	BS�A�AM
Ksecuritycentermanagement.googleapis.com/SecurityHealthAnalyticsCustomModule
validate_only (B�A"�
2SimulateSecurityHealthAnalyticsCustomModuleRequest
parent (	B�AR
custom_config (26.google.cloud.securitycentermanagement.v1.CustomConfigB�A�
resource (2n.google.cloud.securitycentermanagement.v1.SimulateSecurityHealthAnalyticsCustomModuleRequest.SimulatedResourceB�A�
SimulatedResource
resource_type (	B�A3
resource_data (2.google.protobuf.StructB�A3
iam_policy_data (2.google.iam.v1.PolicyB�A"�
SimulatedFinding
name (	B�A
parent (	
resource_name (	
category (	T
state (2@.google.cloud.securitycentermanagement.v1.SimulatedFinding.StateB�Ak
source_properties (2P.google.cloud.securitycentermanagement.v1.SimulatedFinding.SourcePropertiesEntry.

event_time (2.google.protobuf.TimestampU
severity (2C.google.cloud.securitycentermanagement.v1.SimulatedFinding.Severity^
finding_class	 (2G.google.cloud.securitycentermanagement.v1.SimulatedFinding.FindingClassO
SourcePropertiesEntry
key (	%
value (2.google.protobuf.Value:8"8
State
STATE_UNSPECIFIED 

ACTIVE
INACTIVE"Q
Severity
SEVERITY_UNSPECIFIED 
CRITICAL
HIGH

MEDIUM
LOW"�
FindingClass
FINDING_CLASS_UNSPECIFIED 

THREAT
VULNERABILITY
MISCONFIGURATION
OBSERVATION
	SCC_ERROR
POSTURE_VIOLATION:��A�
%securitycenter.googleapis.com/Finding@organizations/{organization}/sources/{source}/findings/{finding}4folders/{folder}/sources/{source}/findings/{finding}6projects/{project}/sources/{source}/findings/{finding}*findings2finding"�
3SimulateSecurityHealthAnalyticsCustomModuleResponse}
result (2m.google.cloud.securitycentermanagement.v1.SimulateSecurityHealthAnalyticsCustomModuleResponse.SimulatedResult�
SimulatedResultM
finding (2:.google.cloud.securitycentermanagement.v1.SimulatedFindingH .
no_violation (2.google.protobuf.EmptyH #
error (2.google.rpc.StatusH B
result"�
)EffectiveEventThreatDetectionCustomModule
name (	B�A,
config (2.google.protobuf.StructB�A�
enablement_state (2c.google.cloud.securitycentermanagement.v1.EffectiveEventThreatDetectionCustomModule.EnablementStateB�A
type (	B�A
display_name (	B�A
description (	B�A"N
EnablementState 
ENABLEMENT_STATE_UNSPECIFIED 
ENABLED
DISABLED:��A�
Qsecuritycentermanagement.googleapis.com/EffectiveEventThreatDetectionCustomModule�organizations/{organization}/locations/{location}/effectiveEventThreatDetectionCustomModules/{effective_event_threat_detection_custom_module}�projects/{project}/locations/{location}/effectiveEventThreatDetectionCustomModules/{effective_event_threat_detection_custom_module}�folders/{folder}/locations/{location}/effectiveEventThreatDetectionCustomModules/{effective_event_threat_detection_custom_module}**effectiveEventThreatDetectionCustomModules2)effectiveEventThreatDetectionCustomModule"�
5ListEffectiveEventThreatDetectionCustomModulesRequesti
parent (	BY�A�ASQsecuritycentermanagement.googleapis.com/EffectiveEventThreatDetectionCustomModule
	page_size (B�A

page_token (	B�A"�
6ListEffectiveEventThreatDetectionCustomModulesResponse�
/effective_event_threat_detection_custom_modules (2S.google.cloud.securitycentermanagement.v1.EffectiveEventThreatDetectionCustomModule
next_page_token (	"�
3GetEffectiveEventThreatDetectionCustomModuleRequestg
name (	BY�A�AS
Qsecuritycentermanagement.googleapis.com/EffectiveEventThreatDetectionCustomModule"�
 EventThreatDetectionCustomModule
name (	B�A,
config (2.google.protobuf.StructB�Ai
ancestor_module (	BP�A�AJ
Hsecuritycentermanagement.googleapis.com/EventThreatDetectionCustomModuley
enablement_state (2Z.google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModule.EnablementStateB�A
type (	B�A
display_name (	B�A
description (	B�A4
update_time (2.google.protobuf.TimestampB�A
last_editor	 (	B�A"]
EnablementState 
ENABLEMENT_STATE_UNSPECIFIED 
ENABLED
DISABLED
	INHERITED:��A�
Hsecuritycentermanagement.googleapis.com/EventThreatDetectionCustomModulezorganizations/{organization}/locations/{location}/eventThreatDetectionCustomModules/{event_threat_detection_custom_module}pprojects/{project}/locations/{location}/eventThreatDetectionCustomModules/{event_threat_detection_custom_module}nfolders/{folder}/locations/{location}/eventThreatDetectionCustomModules/{event_threat_detection_custom_module}*!eventThreatDetectionCustomModules2 eventThreatDetectionCustomModule"�
,ListEventThreatDetectionCustomModulesRequest`
parent (	BP�A�AJHsecuritycentermanagement.googleapis.com/EventThreatDetectionCustomModule
	page_size (B�A

page_token (	B�A"�
-ListEventThreatDetectionCustomModulesResponsey
%event_threat_detection_custom_modules (2J.google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModule
next_page_token (	"�
6ListDescendantEventThreatDetectionCustomModulesRequest`
parent (	BP�A�AJHsecuritycentermanagement.googleapis.com/EventThreatDetectionCustomModule
	page_size (B�A

page_token (	B�A"�
7ListDescendantEventThreatDetectionCustomModulesResponsey
%event_threat_detection_custom_modules (2J.google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModule
next_page_token (	"�
*GetEventThreatDetectionCustomModuleRequest^
name (	BP�A�AJ
Hsecuritycentermanagement.googleapis.com/EventThreatDetectionCustomModule"�
-CreateEventThreatDetectionCustomModuleRequest`
parent (	BP�A�AJHsecuritycentermanagement.googleapis.com/EventThreatDetectionCustomModule}
$event_threat_detection_custom_module (2J.google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModuleB�A
validate_only (B�A"�
-UpdateEventThreatDetectionCustomModuleRequest4
update_mask (2.google.protobuf.FieldMaskB�A}
$event_threat_detection_custom_module (2J.google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModuleB�A
validate_only (B�A"�
-DeleteEventThreatDetectionCustomModuleRequest^
name (	BP�A�AJ
Hsecuritycentermanagement.googleapis.com/EventThreatDetectionCustomModule
validate_only (B�A"�
/ValidateEventThreatDetectionCustomModuleRequest`
parent (	BP�A�AJHsecuritycentermanagement.googleapis.com/EventThreatDetectionCustomModule
raw_text (	B�A
type (	B�A"�
0ValidateEventThreatDetectionCustomModuleResponse�
errors (2v.google.cloud.securitycentermanagement.v1.ValidateEventThreatDetectionCustomModuleResponse.CustomModuleValidationError�
CustomModuleValidationError
description (	

field_path (	w
start (2c.google.cloud.securitycentermanagement.v1.ValidateEventThreatDetectionCustomModuleResponse.PositionH �u
end (2c.google.cloud.securitycentermanagement.v1.ValidateEventThreatDetectionCustomModuleResponse.PositionH�B
_startB
_end6
Position
line_number (
column_number (2�K
SecurityCenterManagement�
1ListEffectiveSecurityHealthAnalyticsCustomModulesb.google.cloud.securitycentermanagement.v1.ListEffectiveSecurityHealthAnalyticsCustomModulesRequestc.google.cloud.securitycentermanagement.v1.ListEffectiveSecurityHealthAnalyticsCustomModulesResponse"��Aparent����Q/v1/{parent=projects/*/locations/*}/effectiveSecurityHealthAnalyticsCustomModulesZRP/v1/{parent=folders/*/locations/*}/effectiveSecurityHealthAnalyticsCustomModulesZXV/v1/{parent=organizations/*/locations/*}/effectiveSecurityHealthAnalyticsCustomModules�
/GetEffectiveSecurityHealthAnalyticsCustomModule`.google.cloud.securitycentermanagement.v1.GetEffectiveSecurityHealthAnalyticsCustomModuleRequestV.google.cloud.securitycentermanagement.v1.EffectiveSecurityHealthAnalyticsCustomModule"��Aname����Q/v1/{name=projects/*/locations/*/effectiveSecurityHealthAnalyticsCustomModules/*}ZRP/v1/{name=folders/*/locations/*/effectiveSecurityHealthAnalyticsCustomModules/*}ZXV/v1/{name=organizations/*/locations/*/effectiveSecurityHealthAnalyticsCustomModules/*}�
(ListSecurityHealthAnalyticsCustomModulesY.google.cloud.securitycentermanagement.v1.ListSecurityHealthAnalyticsCustomModulesRequestZ.google.cloud.securitycentermanagement.v1.ListSecurityHealthAnalyticsCustomModulesResponse"��Aparent����H/v1/{parent=projects/*/locations/*}/securityHealthAnalyticsCustomModulesZIG/v1/{parent=folders/*/locations/*}/securityHealthAnalyticsCustomModulesZOM/v1/{parent=organizations/*/locations/*}/securityHealthAnalyticsCustomModules�
2ListDescendantSecurityHealthAnalyticsCustomModulesc.google.cloud.securitycentermanagement.v1.ListDescendantSecurityHealthAnalyticsCustomModulesRequestd.google.cloud.securitycentermanagement.v1.ListDescendantSecurityHealthAnalyticsCustomModulesResponse"��Aparent����W/v1/{parent=projects/*/locations/*}/securityHealthAnalyticsCustomModules:listDescendantZXV/v1/{parent=folders/*/locations/*}/securityHealthAnalyticsCustomModules:listDescendantZ^\\/v1/{parent=organizations/*/locations/*}/securityHealthAnalyticsCustomModules:listDescendant�
&GetSecurityHealthAnalyticsCustomModuleW.google.cloud.securitycentermanagement.v1.GetSecurityHealthAnalyticsCustomModuleRequestM.google.cloud.securitycentermanagement.v1.SecurityHealthAnalyticsCustomModule"��Aname����H/v1/{name=projects/*/locations/*/securityHealthAnalyticsCustomModules/*}ZIG/v1/{name=folders/*/locations/*/securityHealthAnalyticsCustomModules/*}ZOM/v1/{name=organizations/*/locations/*/securityHealthAnalyticsCustomModules/*}�
)CreateSecurityHealthAnalyticsCustomModuleZ.google.cloud.securitycentermanagement.v1.CreateSecurityHealthAnalyticsCustomModuleRequestM.google.cloud.securitycentermanagement.v1.SecurityHealthAnalyticsCustomModule"��A.parent,security_health_analytics_custom_module����"H/v1/{parent=projects/*/locations/*}/securityHealthAnalyticsCustomModules:\'security_health_analytics_custom_moduleZr"G/v1/{parent=folders/*/locations/*}/securityHealthAnalyticsCustomModules:\'security_health_analytics_custom_moduleZx"M/v1/{parent=organizations/*/locations/*}/securityHealthAnalyticsCustomModules:\'security_health_analytics_custom_module�
)UpdateSecurityHealthAnalyticsCustomModuleZ.google.cloud.securitycentermanagement.v1.UpdateSecurityHealthAnalyticsCustomModuleRequestM.google.cloud.securitycentermanagement.v1.SecurityHealthAnalyticsCustomModule"��A3security_health_analytics_custom_module,update_mask����2p/v1/{security_health_analytics_custom_module.name=projects/*/locations/*/securityHealthAnalyticsCustomModules/*}:\'security_health_analytics_custom_moduleZ�2o/v1/{security_health_analytics_custom_module.name=folders/*/locations/*/securityHealthAnalyticsCustomModules/*}:\'security_health_analytics_custom_moduleZ�2u/v1/{security_health_analytics_custom_module.name=organizations/*/locations/*/securityHealthAnalyticsCustomModules/*}:\'security_health_analytics_custom_module�
)DeleteSecurityHealthAnalyticsCustomModuleZ.google.cloud.securitycentermanagement.v1.DeleteSecurityHealthAnalyticsCustomModuleRequest.google.protobuf.Empty"��Aname����*H/v1/{name=projects/*/locations/*/securityHealthAnalyticsCustomModules/*}ZI*G/v1/{name=folders/*/locations/*/securityHealthAnalyticsCustomModules/*}ZO*M/v1/{name=organizations/*/locations/*/securityHealthAnalyticsCustomModules/*}�
+SimulateSecurityHealthAnalyticsCustomModule\\.google.cloud.securitycentermanagement.v1.SimulateSecurityHealthAnalyticsCustomModuleRequest].google.cloud.securitycentermanagement.v1.SimulateSecurityHealthAnalyticsCustomModuleResponse"��Aparent,custom_config,resource����"Q/v1/{parent=projects/*/locations/*}/securityHealthAnalyticsCustomModules:simulate:*ZU"P/v1/{parent=folders/*/locations/*}/securityHealthAnalyticsCustomModules:simulate:*Z["V/v1/{parent=organizations/*/locations/*}/securityHealthAnalyticsCustomModules:simulate:*�
.ListEffectiveEventThreatDetectionCustomModules_.google.cloud.securitycentermanagement.v1.ListEffectiveEventThreatDetectionCustomModulesRequest`.google.cloud.securitycentermanagement.v1.ListEffectiveEventThreatDetectionCustomModulesResponse"��Aparent����N/v1/{parent=projects/*/locations/*}/effectiveEventThreatDetectionCustomModulesZOM/v1/{parent=folders/*/locations/*}/effectiveEventThreatDetectionCustomModulesZUS/v1/{parent=organizations/*/locations/*}/effectiveEventThreatDetectionCustomModules�
,GetEffectiveEventThreatDetectionCustomModule].google.cloud.securitycentermanagement.v1.GetEffectiveEventThreatDetectionCustomModuleRequestS.google.cloud.securitycentermanagement.v1.EffectiveEventThreatDetectionCustomModule"��Aname����N/v1/{name=projects/*/locations/*/effectiveEventThreatDetectionCustomModules/*}ZOM/v1/{name=folders/*/locations/*/effectiveEventThreatDetectionCustomModules/*}ZUS/v1/{name=organizations/*/locations/*/effectiveEventThreatDetectionCustomModules/*}�
%ListEventThreatDetectionCustomModulesV.google.cloud.securitycentermanagement.v1.ListEventThreatDetectionCustomModulesRequestW.google.cloud.securitycentermanagement.v1.ListEventThreatDetectionCustomModulesResponse"��Aparent����E/v1/{parent=projects/*/locations/*}/eventThreatDetectionCustomModulesZFD/v1/{parent=folders/*/locations/*}/eventThreatDetectionCustomModulesZLJ/v1/{parent=organizations/*/locations/*}/eventThreatDetectionCustomModules�
/ListDescendantEventThreatDetectionCustomModules`.google.cloud.securitycentermanagement.v1.ListDescendantEventThreatDetectionCustomModulesRequesta.google.cloud.securitycentermanagement.v1.ListDescendantEventThreatDetectionCustomModulesResponse"��Aparent����T/v1/{parent=projects/*/locations/*}/eventThreatDetectionCustomModules:listDescendantZUS/v1/{parent=folders/*/locations/*}/eventThreatDetectionCustomModules:listDescendantZ[Y/v1/{parent=organizations/*/locations/*}/eventThreatDetectionCustomModules:listDescendant�
#GetEventThreatDetectionCustomModuleT.google.cloud.securitycentermanagement.v1.GetEventThreatDetectionCustomModuleRequestJ.google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModule"��Aname����E/v1/{name=projects/*/locations/*/eventThreatDetectionCustomModules/*}ZFD/v1/{name=folders/*/locations/*/eventThreatDetectionCustomModules/*}ZLJ/v1/{name=organizations/*/locations/*/eventThreatDetectionCustomModules/*}�
&CreateEventThreatDetectionCustomModuleW.google.cloud.securitycentermanagement.v1.CreateEventThreatDetectionCustomModuleRequestJ.google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModule"��A+parent,event_threat_detection_custom_module����"E/v1/{parent=projects/*/locations/*}/eventThreatDetectionCustomModules:$event_threat_detection_custom_moduleZl"D/v1/{parent=folders/*/locations/*}/eventThreatDetectionCustomModules:$event_threat_detection_custom_moduleZr"J/v1/{parent=organizations/*/locations/*}/eventThreatDetectionCustomModules:$event_threat_detection_custom_module�
&UpdateEventThreatDetectionCustomModuleW.google.cloud.securitycentermanagement.v1.UpdateEventThreatDetectionCustomModuleRequestJ.google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModule"��A0event_threat_detection_custom_module,update_mask����2j/v1/{event_threat_detection_custom_module.name=projects/*/locations/*/eventThreatDetectionCustomModules/*}:$event_threat_detection_custom_moduleZ�2i/v1/{event_threat_detection_custom_module.name=folders/*/locations/*/eventThreatDetectionCustomModules/*}:$event_threat_detection_custom_moduleZ�2o/v1/{event_threat_detection_custom_module.name=organizations/*/locations/*/eventThreatDetectionCustomModules/*}:$event_threat_detection_custom_module�
&DeleteEventThreatDetectionCustomModuleW.google.cloud.securitycentermanagement.v1.DeleteEventThreatDetectionCustomModuleRequest.google.protobuf.Empty"��Aname����*E/v1/{name=projects/*/locations/*/eventThreatDetectionCustomModules/*}ZF*D/v1/{name=folders/*/locations/*/eventThreatDetectionCustomModules/*}ZL*J/v1/{name=organizations/*/locations/*/eventThreatDetectionCustomModules/*}�
(ValidateEventThreatDetectionCustomModuleY.google.cloud.securitycentermanagement.v1.ValidateEventThreatDetectionCustomModuleRequestZ.google.cloud.securitycentermanagement.v1.ValidateEventThreatDetectionCustomModuleResponse"�����"N/v1/{parent=projects/*/locations/*}/eventThreatDetectionCustomModules:validate:*ZR"M/v1/{parent=folders/*/locations/*}/eventThreatDetectionCustomModules:validate:*ZX"S/v1/{parent=organizations/*/locations/*}/eventThreatDetectionCustomModules:validate:*[�A\'securitycentermanagement.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
,com.google.cloud.securitycentermanagement.v1BSecurityCenterManagementProtoPZhcloud.google.com/go/securitycentermanagement/apiv1/securitycentermanagementpb;securitycentermanagementpb�(Google.Cloud.SecurityCenterManagement.V1�(Google\\Cloud\\SecurityCenterManagement\\V1�+Google::Cloud::SecurityCenterManagement::V1�Aq
<securitycentermanagement.googleapis.com/OrganizationLocation1organizations/{organization}/locations/{location}�A_
6securitycentermanagement.googleapis.com/FolderLocation%folders/{folder}/locations/{location}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

