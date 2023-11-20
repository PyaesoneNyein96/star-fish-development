import { mergeProps, useSSRContext } from "vue";
import { ssrRenderAttrs, ssrRenderComponent } from "vue/server-renderer";
import SideBar from "./SideBar-2549fdbf.js";
import _sfc_main$1 from "./Nav-3593c9b6.js";
import _sfc_main$2 from "./Index-Dash-fcac0c5d.js";
import "@inertiajs/vue3";
import "./_plugin-vue_export-helper-cc2b3d55.js";
import "./Profile-dbfff9d9.js";
import "./Students-f949d0d9.js";
import "./Rewards-86c348ae.js";
import "./Chat-e4305a56.js";
const _sfc_main = {
  name: "Main",
  __ssrInlineRender: true,
  props: {
    user: Object,
    students: Object,
    chat: Object,
    rewards: Object,
    rewards_name: Object
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({ class: "d-flex" }, _attrs))}>`);
      _push(ssrRenderComponent(SideBar, null, null, _parent));
      _push(`<div class="col">`);
      _push(ssrRenderComponent(_sfc_main$1, { user: __props.user }, null, _parent));
      _push(ssrRenderComponent(_sfc_main$2, {
        students: __props.students,
        chat: __props.chat,
        rewards: __props.rewards,
        rewards_name: __props.rewards_name
      }, null, _parent));
      _push(`</div></div>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Main.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
