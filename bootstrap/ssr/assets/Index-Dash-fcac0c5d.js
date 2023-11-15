import { ssrRenderComponent } from "vue/server-renderer";
import _sfc_main$1 from "./Students-f949d0d9.js";
import _sfc_main$2 from "./Rewards-86c348ae.js";
import _sfc_main$3 from "./Chat-e4305a56.js";
import { useSSRContext } from "vue";
import "@inertiajs/vue3";
const IndexDash_vue_vue_type_style_index_0_lang = "";
const _sfc_main = {
  name: "Index-Dash",
  __ssrInlineRender: true,
  props: {
    students: Object,
    chat: Object,
    rewards: Object,
    rewards_name: Object
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<!--[--><div class="d-flex">`);
      _push(ssrRenderComponent(_sfc_main$1, { students: __props.students }, null, _parent));
      _push(ssrRenderComponent(_sfc_main$2, {
        rewards: __props.rewards,
        rewards_name: __props.rewards_name
      }, null, _parent));
      _push(`</div>`);
      _push(ssrRenderComponent(_sfc_main$3, { chat: __props.chat }, null, _parent));
      _push(`<!--]-->`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Dashboard/Index-Dash.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
