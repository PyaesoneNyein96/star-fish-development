import { mergeProps, useSSRContext } from "vue";
import { ssrRenderAttrs, ssrRenderStyle, ssrRenderList, ssrRenderAttr, ssrInterpolate } from "vue/server-renderer";
import "@inertiajs/vue3";
const _sfc_main = {
  name: "Rewards",
  __ssrInlineRender: true,
  props: {
    rewards: Object,
    rewards_name: Object
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({
        style: { "height": "300px", "width": "30%" },
        class: "overflow-hiddden shadow border-1 m-3 px-5"
      }, _attrs))}><div class="d-flex mb-1 pt-3"><h4>Rewards</h4><div class="col text-end"><small class="text-muted" style="${ssrRenderStyle({ "cursor": "pointer" })}">View All</small></div></div><div class="overflow-y-scroll reward" style="${ssrRenderStyle({ "height": "230px" })}"><!--[-->`);
      ssrRenderList(__props.rewards_name, (rn) => {
        _push(`<div class="accordion-item"><div class="accordion-header border-bottom d-flex py-3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"${ssrRenderAttr("data-bs-target", `#${rn.name}`)} aria-expanded="false"${ssrRenderAttr("aria-controls", `${rn.name}`)}>${ssrInterpolate(rn.name)}</button><small><i class="fa-solid fa-chevron-down text-muted" data-bs-toggle="collapse"${ssrRenderAttr("data-bs-target", `#${rn.name}`)} aria-expanded="false"${ssrRenderAttr("aria-controls", `${rn.name}`)}></i></small></div><div${ssrRenderAttr("id", `${rn.name}`)} class="accordion-collapse collapse"><!--[-->`);
        ssrRenderList(__props.rewards, (r) => {
          _push(`<div class="accordion-body" style="${ssrRenderStyle({ "list-style-type": "circle" })}">`);
          if (r.name == rn.name) {
            _push(`<li class="py-1 text-muted">${ssrInterpolate(r.item)}</li>`);
          } else {
            _push(`<!---->`);
          }
          _push(`</div>`);
        });
        _push(`<!--]--></div></div>`);
      });
      _push(`<!--]--></div></div>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Dashboard/Rewards.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
