import { mergeProps, useSSRContext } from "vue";
import { ssrRenderAttrs, ssrRenderComponent, ssrRenderStyle, ssrRenderList, ssrRenderAttr, ssrInterpolate } from "vue/server-renderer";
import SideBar from "./SideBar-2549fdbf.js";
import _sfc_main$1 from "./Nav-3593c9b6.js";
import "@inertiajs/vue3";
import "./_plugin-vue_export-helper-cc2b3d55.js";
import "./Profile-dbfff9d9.js";
const Index_vue_vue_type_style_index_0_lang = "";
const _sfc_main = {
  name: "Index",
  __ssrInlineRender: true,
  props: {
    chat: Object
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({ class: "d-flex" }, _attrs))}>`);
      _push(ssrRenderComponent(SideBar, null, null, _parent));
      _push(`<div class="col">`);
      _push(ssrRenderComponent(_sfc_main$1, null, null, _parent));
      _push(`<div class="container"><div class="border m-2 rounded overflow-y-scroll chat" style="${ssrRenderStyle({ "height": "87vb" })}"><table class="table m-1" style="${ssrRenderStyle({ "width": "99%" })}"><thead><tr><th scope="col">Photo</th><th scope="col">Message</th><th scope="col">Name</th><th scope="col"></th></tr></thead><tbody><!--[-->`);
      ssrRenderList(__props.chat, (c) => {
        _push(`<tr><td><div style="${ssrRenderStyle({ "width": "35px" })}"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" class="w-100"><img${ssrRenderAttr("src", `/storage/${c.profile_picture}`)} alt="" class="w-100"></div></td><td>${ssrInterpolate(c.message)}</td><td>${ssrInterpolate(c.name)}</td><td class="text-center"><button class="btn btn-danger"><i class="fa-solid fa-ban"></i> Ban </button></td></tr>`);
      });
      _push(`<!--]--></tbody></table></div></div></div></div>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Chat/Index.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
