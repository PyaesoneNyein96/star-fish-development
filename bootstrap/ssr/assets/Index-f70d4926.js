import { mergeProps, useSSRContext } from "vue";
import { ssrRenderAttrs, ssrRenderComponent, ssrRenderStyle, ssrRenderList, ssrRenderAttr, ssrInterpolate } from "vue/server-renderer";
import SideBar from "./SideBar-2549fdbf.js";
import _sfc_main$1 from "./Nav-3593c9b6.js";
import "@inertiajs/vue3";
import "./_plugin-vue_export-helper-cc2b3d55.js";
import "./Profile-dbfff9d9.js";
const _sfc_main = {
  name: "Index",
  __ssrInlineRender: true,
  props: {
    rewards: Object,
    rewards_name: Object
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({ class: "d-flex" }, _attrs))}>`);
      _push(ssrRenderComponent(SideBar, null, null, _parent));
      _push(`<div class="col">`);
      _push(ssrRenderComponent(_sfc_main$1, null, null, _parent));
      _push(`<div class="container"><div class="d-flex mb-4 pt-3 border-bottom"><h4>Rewards</h4><div class="col text-end"><small class="text-muted" style="${ssrRenderStyle({ "cursor": "pointer" })}"></small></div></div><div class="m-auto" style="${ssrRenderStyle({ "width": "80%" })}"><table class="table table-hover rounded-5"><thead><tr><th>Name</th><th></th></tr></thead><tbody style="${ssrRenderStyle({ "font-size": "small" })}"><!--[-->`);
      ssrRenderList(__props.rewards_name, (rn) => {
        _push(`<div class="accordion-item"><div class="accordion-header border-bottom d-flex py-3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"${ssrRenderAttr("data-bs-target", `#${rn.name}`)} aria-expanded="false"${ssrRenderAttr("aria-controls", `${rn.name}`)}>${ssrInterpolate(rn.name)}</button><button class="btn" data-bs-toggle="collapse"${ssrRenderAttr("data-bs-target", `#${rn.name}`)} aria-expanded="false"${ssrRenderAttr("aria-controls", `${rn.name}`)}><small><i class="fa-solid fa-chevron-down text-muted"></i></small></button><button class="ms-3 btn" title="Edit"><i class="fa-regular fa-pen-to-square text-success"></i></button><button class="btn" title="Delete"><i class="fa-solid fa-trash text-danger"></i></button></div><div class="m-auto w-75"><table${ssrRenderAttr("id", `${rn.name}`)} class="accordion-collapse collapse table table-hover"><thead><tr><th>Item</th><th>Points</th><th></th></tr></thead><tbody><!--[-->`);
        ssrRenderList(__props.rewards, (r) => {
          _push(`<tr class="accordion-body">`);
          if (r.name == rn.name) {
            _push(`<td class="py-1 text-muted">${ssrInterpolate(r.item)}</td>`);
          } else {
            _push(`<!---->`);
          }
          if (r.name == rn.name) {
            _push(`<td class="py-1 text-muted">${ssrInterpolate(r.point)}</td>`);
          } else {
            _push(`<!---->`);
          }
          if (r.name == rn.name) {
            _push(`<td class="text-end"><button class="btn btn-sm btn-outline-success me-4"><i class="fa-regular fa-pen-to-square"></i></button><button class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>`);
          } else {
            _push(`<!---->`);
          }
          _push(`</tr>`);
        });
        _push(`<!--]--></tbody></table></div></div>`);
      });
      _push(`<!--]--></tbody></table></div></div></div></div>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Rewards/Index.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
