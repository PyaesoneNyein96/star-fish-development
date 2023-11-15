import { mergeProps, useSSRContext } from "vue";
import { ssrRenderAttrs, ssrRenderStyle, ssrRenderList, ssrInterpolate } from "vue/server-renderer";
import "@inertiajs/vue3";
const _sfc_main = {
  name: "Chat",
  __ssrInlineRender: true,
  props: {
    chat: Object
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({
        style: { "height": "300px", "width": "30%" },
        class: "overflow-hiddden shadow border-1 m-3 px-5"
      }, _attrs))}><div class="d-flex mb-1 pt-3"><h4>Chat</h4><div class="col text-end"><small class="text-muted" style="${ssrRenderStyle({ "cursor": "pointer" })}">View All</small></div></div><div class="overflow-y-scroll reward border rounded p-2" style="${ssrRenderStyle({ "height": "230px" })}"><!--[-->`);
      ssrRenderList(__props.chat, (c) => {
        _push(`<div class="my-2 d-flex"><div style="${ssrRenderStyle({ "width": "30px" })}" class="me-2 mt-4"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="rounded-circle w-100" alt=""></div><div class="col"><small class="text-muted d-block mb-2" style="${ssrRenderStyle({ "font-size": "smaller" })}">${ssrInterpolate(c.name)}</small><span class="px-3 py-2 bg-light rounded-3">${ssrInterpolate(c.message)}</span></div></div>`);
      });
      _push(`<!--]--></div></div>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Dashboard/Chat.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
