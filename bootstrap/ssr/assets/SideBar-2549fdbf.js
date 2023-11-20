import { mergeProps, useSSRContext } from "vue";
import { ssrRenderAttrs, ssrRenderStyle } from "vue/server-renderer";
import "@inertiajs/vue3";
import { _ as _export_sfc } from "./_plugin-vue_export-helper-cc2b3d55.js";
const SideBar_vue_vue_type_style_index_0_scoped_83a13776_lang = "";
const _sfc_main = {
  name: "SideBar",
  __ssrInlineRender: true,
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<aside${ssrRenderAttrs(mergeProps({ class: "bg-dark" }, _attrs))} data-v-83a13776><div style="${ssrRenderStyle({ "min-height": "100vh" })}" data-v-83a13776><div class="collapse collapse-horizontal" id="sideBar" data-v-83a13776><div style="${ssrRenderStyle({ "background-color": "darkslategrey", "padding": "13px 20px 13px" })}" data-v-83a13776><img src="/mail-pic/icon-logo.png" alt="logo" class="ms-3" style="${ssrRenderStyle({ "width": "120px" })}" data-v-83a13776></div><div class="text-white-50 mt-3" style="${ssrRenderStyle({ "width": "250px" })}" data-v-83a13776><ul class="list-unstyled" data-v-83a13776><li class="py-1 ps-3 py-2" style="${ssrRenderStyle({ "cursor": "pointer" })}" data-v-83a13776><a data-v-83a13776><i class="fa-solid fa-chart-line pe-2" data-v-83a13776></i>Dashboard</a></li><li class="py-1 ps-3 py-2" style="${ssrRenderStyle({ "cursor": "pointer" })}" data-v-83a13776><a data-v-83a13776><i class="fa-solid fa-children pe-2" data-v-83a13776></i>Students</a></li><li class="py-1 ps-3 py-2" style="${ssrRenderStyle({ "cursor": "pointer" })}" data-v-83a13776><i class="fa-solid fa-trophy pe-2" data-v-83a13776></i>Rewards</li><li class="py-1 ps-3 py-2" style="${ssrRenderStyle({ "cursor": "pointer" })}" data-v-83a13776><i class="fa-solid fa-comment pe-2" data-v-83a13776></i>Chat</li></ul></div></div></div></aside>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/SideBar.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
const SideBar = /* @__PURE__ */ _export_sfc(_sfc_main, [["__scopeId", "data-v-83a13776"]]);
export {
  SideBar as default
};
