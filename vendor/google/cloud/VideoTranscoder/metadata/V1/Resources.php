<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace GPBMetadata\Google\Cloud\Video\Transcoder\V1;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�P
0google/cloud/video/transcoder/v1/resources.proto google.cloud.video.transcoder.v1google/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�	
Job
name (	
	input_uri (	B�A

output_uri (	B�A
template_id (	B�AH =
config (2+.google.cloud.video.transcoder.v1.JobConfigH I
state (25.google.cloud.video.transcoder.v1.Job.ProcessingStateB�A4
create_time (2.google.protobuf.TimestampB�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A!
ttl_after_completion_days (A
labels (21.google.cloud.video.transcoder.v1.Job.LabelsEntry&
error (2.google.rpc.StatusB�AB
mode (24.google.cloud.video.transcoder.v1.Job.ProcessingMode
batch_mode_priority (U
optimization (2:.google.cloud.video.transcoder.v1.Job.OptimizationStrategyB�A-
LabelsEntry
key (	
value (	:8"h
ProcessingState 
PROCESSING_STATE_UNSPECIFIED 
PENDING
RUNNING
	SUCCEEDED

FAILED"m
ProcessingMode
PROCESSING_MODE_UNSPECIFIED 
PROCESSING_MODE_INTERACTIVE
PROCESSING_MODE_BATCH"[
OptimizationStrategy%
!OPTIMIZATION_STRATEGY_UNSPECIFIED 

AUTODETECT
DISABLED:V�AS
transcoder.googleapis.com/Job2projects/{project}/locations/{location}/jobs/{job}B

job_config"�
JobTemplate
name (	;
config (2+.google.cloud.video.transcoder.v1.JobConfigI
labels (29.google.cloud.video.transcoder.v1.JobTemplate.LabelsEntry-
LabelsEntry
key (	
value (	:8:o�Al
%transcoder.googleapis.com/JobTemplateCprojects/{project}/locations/{location}/jobTemplates/{job_template}"�
	JobConfig7
inputs (2\'.google.cloud.video.transcoder.v1.Input=
	edit_list (2*.google.cloud.video.transcoder.v1.EditAtomN
elementary_streams (22.google.cloud.video.transcoder.v1.ElementaryStream@
mux_streams (2+.google.cloud.video.transcoder.v1.MuxStream=
	manifests (2*.google.cloud.video.transcoder.v1.Manifest8
output (2(.google.cloud.video.transcoder.v1.Output<
	ad_breaks (2).google.cloud.video.transcoder.v1.AdBreakO
pubsub_destination (23.google.cloud.video.transcoder.v1.PubsubDestinationD
sprite_sheets	 (2-.google.cloud.video.transcoder.v1.SpriteSheet;
overlays
 (2).google.cloud.video.transcoder.v1.OverlayA
encryptions (2,.google.cloud.video.transcoder.v1.Encryption"v
Input
key (	
uri (	S
preprocessing_config (25.google.cloud.video.transcoder.v1.PreprocessingConfig"
Output
uri (	"�
EditAtom
key (	
inputs (	2
end_time_offset (2.google.protobuf.Duration4
start_time_offset (2.google.protobuf.Duration"?
AdBreak4
start_time_offset (2.google.protobuf.Duration"�
ElementaryStream
key (	E
video_stream (2-.google.cloud.video.transcoder.v1.VideoStreamH E
audio_stream (2-.google.cloud.video.transcoder.v1.AudioStreamH C
text_stream (2,.google.cloud.video.transcoder.v1.TextStreamH B
elementary_stream"�
	MuxStream
key (	
	file_name (	
	container (	
elementary_streams (	K
segment_settings (21.google.cloud.video.transcoder.v1.SegmentSettings
encryption_id (	"�
Manifest
	file_name (	J
type (27.google.cloud.video.transcoder.v1.Manifest.ManifestTypeB�A
mux_streams (	B�AE
dash (25.google.cloud.video.transcoder.v1.Manifest.DashConfigH �

DashConfign
segment_reference_scheme (2L.google.cloud.video.transcoder.v1.Manifest.DashConfig.SegmentReferenceScheme"q
SegmentReferenceScheme(
$SEGMENT_REFERENCE_SCHEME_UNSPECIFIED 
SEGMENT_LIST
SEGMENT_TEMPLATE_NUMBER"@
ManifestType
MANIFEST_TYPE_UNSPECIFIED 
HLS
DASHB
manifest_config""
PubsubDestination
topic (	"�
SpriteSheet
format (	
file_prefix (	B�A 
sprite_width_pixels (B�A!
sprite_height_pixels (B�A
column_count (
	row_count (4
start_time_offset (2.google.protobuf.Duration2
end_time_offset (2.google.protobuf.Duration
total_count	 (H -
interval
 (2.google.protobuf.DurationH 
quality (B
extraction_strategy"�	
Overlay>
image (2/.google.cloud.video.transcoder.v1.Overlay.ImageG

animations (23.google.cloud.video.transcoder.v1.Overlay.Animation,
NormalizedCoordinate	
x (	
y (|
Image
uri (	B�AR

resolution (2>.google.cloud.video.transcoder.v1.Overlay.NormalizedCoordinate
alpha (�
AnimationStaticJ
xy (2>.google.cloud.video.transcoder.v1.Overlay.NormalizedCoordinate4
start_time_offset (2.google.protobuf.Duration�
AnimationFadeJ
	fade_type (22.google.cloud.video.transcoder.v1.Overlay.FadeTypeB�AJ
xy (2>.google.cloud.video.transcoder.v1.Overlay.NormalizedCoordinate4
start_time_offset (2.google.protobuf.Duration2
end_time_offset (2.google.protobuf.DurationD
AnimationEnd4
start_time_offset (2.google.protobuf.Duration�
	AnimationU
animation_static (29.google.cloud.video.transcoder.v1.Overlay.AnimationStaticH Q
animation_fade (27.google.cloud.video.transcoder.v1.Overlay.AnimationFadeH O
animation_end (26.google.cloud.video.transcoder.v1.Overlay.AnimationEndH B
animation_type"@
FadeType
FADE_TYPE_UNSPECIFIED 
FADE_IN
FADE_OUT"�

PreprocessingConfigJ
color (2;.google.cloud.video.transcoder.v1.PreprocessingConfig.ColorN
denoise (2=.google.cloud.video.transcoder.v1.PreprocessingConfig.DenoiseN
deblock (2=.google.cloud.video.transcoder.v1.PreprocessingConfig.DeblockJ
audio (2;.google.cloud.video.transcoder.v1.PreprocessingConfig.AudioH
crop (2:.google.cloud.video.transcoder.v1.PreprocessingConfig.CropF
pad (29.google.cloud.video.transcoder.v1.PreprocessingConfig.PadV
deinterlace (2A.google.cloud.video.transcoder.v1.PreprocessingConfig.DeinterlaceA
Color

saturation (
contrast (

brightness ()
Denoise
strength (
tune (	,
Deblock
strength (
enabled (<
Audio
lufs (

high_boost (
	low_boost (\\
Crop

top_pixels (
bottom_pixels (
left_pixels (
right_pixels ([
Pad

top_pixels (
bottom_pixels (
left_pixels (
right_pixels (�
Deinterlace^
yadif (2M.google.cloud.video.transcoder.v1.PreprocessingConfig.Deinterlace.YadifConfigH ^
bwdif (2M.google.cloud.video.transcoder.v1.PreprocessingConfig.Deinterlace.BwdifConfigH p
YadifConfig
mode (	#
disable_spatial_interlacing (
parity (	
deinterlace_all_frames (K
BwdifConfig
mode (	
parity (	
deinterlace_all_frames (B
deinterlacing_filter"�
VideoStreamO
h264 (2?.google.cloud.video.transcoder.v1.VideoStream.H264CodecSettingsH O
h265 (2?.google.cloud.video.transcoder.v1.VideoStream.H265CodecSettingsH M
vp9 (2>.google.cloud.video.transcoder.v1.VideoStream.Vp9CodecSettingsH �
H264CodecSettings
width_pixels (
height_pixels (

frame_rate (B�A
bitrate_bps (B�A
pixel_format (	
rate_control_mode (	
	crf_level (
allow_open_gop (
gop_frame_count	 (H 1
gop_duration
 (2.google.protobuf.DurationH 
enable_two_pass (
vbv_size_bits (
vbv_fullness_bits (
entropy_coder (	
	b_pyramid (
b_frame_count (
aq_strength (
profile (	
tune (	
preset (	B

gop_mode�
H265CodecSettings
width_pixels (
height_pixels (

frame_rate (B�A
bitrate_bps (B�A
pixel_format (	
rate_control_mode (	
	crf_level (
allow_open_gop (
gop_frame_count	 (H 1
gop_duration
 (2.google.protobuf.DurationH 
enable_two_pass (
vbv_size_bits (
vbv_fullness_bits (
	b_pyramid (
b_frame_count (
aq_strength (
profile (	
tune (	
preset (	B

gop_mode�
Vp9CodecSettings
width_pixels (
height_pixels (

frame_rate (B�A
bitrate_bps (B�A
pixel_format (	
rate_control_mode (	
	crf_level (
gop_frame_count (H 1
gop_duration	 (2.google.protobuf.DurationH 
profile
 (	B

gop_modeB
codec_settings"�
AudioStream
codec (	
bitrate_bps (B�A
channel_count (
channel_layout (	K
mapping (2:.google.cloud.video.transcoder.v1.AudioStream.AudioMapping
sample_rate_hertz (
language_code (	
display_name (	�
AudioMapping
atom_key (	B�A
	input_key (	B�A
input_track (B�A
input_channel (B�A
output_channel (B�A
gain_db ("�

TextStream
codec (	
language_code (	I
mapping (28.google.cloud.video.transcoder.v1.TextStream.TextMapping
display_name (	V
TextMapping
atom_key (	B�A
	input_key (	B�A
input_track (B�A"h
SegmentSettings3
segment_duration (2.google.protobuf.Duration 
individual_segments (B�A"�

Encryption
id (	B�AP
aes_128 (2=.google.cloud.video.transcoder.v1.Encryption.Aes128EncryptionH V

sample_aes (2@.google.cloud.video.transcoder.v1.Encryption.SampleAesEncryptionH V
	mpeg_cenc (2A.google.cloud.video.transcoder.v1.Encryption.MpegCommonEncryptionH e
secret_manager_key_source (2@.google.cloud.video.transcoder.v1.Encryption.SecretManagerSourceHQ
drm_systems (27.google.cloud.video.transcoder.v1.Encryption.DrmSystemsB�A
Aes128Encryption
SampleAesEncryption+
MpegCommonEncryption
scheme (	B�A2
SecretManagerSource
secret_version (	B�A

Widevine

Fairplay
	Playready

Clearkey�

DrmSystemsG
widevine (25.google.cloud.video.transcoder.v1.Encryption.WidevineG
fairplay (25.google.cloud.video.transcoder.v1.Encryption.FairplayI
	playready (26.google.cloud.video.transcoder.v1.Encryption.PlayreadyG
clearkey (25.google.cloud.video.transcoder.v1.Encryption.ClearkeyB
encryption_modeB
secret_sourceB~
$com.google.cloud.video.transcoder.v1BResourcesProtoPZDcloud.google.com/go/video/transcoder/apiv1/transcoderpb;transcoderpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

